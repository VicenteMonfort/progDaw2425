<?php

class Lighting extends Connection
{
    private $currentFilter;
    public function __construct()
    {
        session_start();
        parent::connect();
        if (isset($_POST["filter"])) {
            $this->currentFilter =  $_POST["filter"];
            $_SESSION["currentFilter"] = $_POST["filter"];
        } elseif (isset($_SESSION["currentFilter"])) {
            $this->currentFilter = $_SESSION["currentFilter"];
        } else {
            $this->currentFilter = "all";
            $_SESSION["currentFilter"] = $this->currentFilter;
        }
    }

    public function importLamps($file)
    {
        try {
            $this->conn->beginTransaction();
            $sqlDelete = "DELETE FROM lamps";
            $rowsDeleted = $this->conn->exec($sqlDelete);

            echo "Filas borradas " . $rowsDeleted . "<br>";
            $lampId = "";
            $lampName = "";
            $lampModel = "";
            $lampzone = "";
            $lampOn = "";
            $stmtInsert = $this->conn->prepare("INSERT INTO lamps VALUES(?,?,?,?,?)");
            $stmtInsert->bindParam(1, $lampId, PDO::PARAM_INT);
            $stmtInsert->bindParam(2, $lampName, PDO::PARAM_STR);
            $stmtInsert->bindParam(3, $lampModel, PDO::PARAM_INT);
            $stmtInsert->bindParam(4, $lampzone, PDO::PARAM_INT);
            $stmtInsert->bindParam(5, $lampOn, PDO::PARAM_BOOL);

            $gestor = fopen($file, "r");
            $linesCount = 0;
            while (($element = fgetcsv($gestor)) !== false) {
                $lampId = $element[0];
                $lampName = $element[1];
                $lampModel = $this->getModelId($element[2]);
                $lampzone = $this->getZoneId($element[3]);
                $lampOn = ($element[4] == 'on') ? true : false;

                $stmtInsert->execute();
                $linesCount++;
            }
            fclose($gestor);
            echo "Filas importadas con éxito " . $linesCount . "<br>";
            $this->conn->commit();
        } catch (Exception | PDOException $e) {
            echo 'Falló la importación: ' . $e->getMessage();
            $stmtInsert->debugDumpParams();
        }
    }

    private function getModelId($modelPartNumber)
    {
        $sql = "SELECT model_id FROM lamp_models WHERE model_part_number = '$modelPartNumber'";
        return $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC)["model_id"];
    }

    private function getZoneId($zoneName)
    {
        $sql = "SELECT zone_id FROM zones WHERE zone_name = '$zoneName'";
        return $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC)["zone_id"];
    }

    private function getAllLamps()
    {
        try {

            $filter = $this->currentFilter != "all" ? "WHERE zones.zone_id = " . $this->currentFilter : "";

            $sqlAll = "SELECT lamps.lamp_id, lamps.lamp_name, lamp_on, lamp_models.model_part_number,lamp_models.model_wattage, zones.zone_name FROM lamps INNER JOIN lamp_models ON lamps.lamp_model=lamp_models.model_id INNER JOIN zones ON lamps.lamp_zone = zones.zone_id " . $filter . " ORDER BY lamps.lamp_id;";
            $rowsAll = $this->conn->query($sqlAll);
            $lamps = [];
            while ($lamp = $rowsAll->fetch(PDO::FETCH_ASSOC)) {
                array_push($lamps, new Lamp(
                    $lamp["lamp_id"],
                    $lamp["lamp_name"],
                    ($lamp["lamp_on"] == 1 ? true : false),
                    $lamp["model_part_number"],
                    $lamp["model_wattage"],
                    $lamp["zone_name"]
                ));
            }
            return $lamps;
        } catch (PDOException $e) {
            echo 'Query has failed: ' . $e->getMessage();
        }
    }

    public function changeStatus($id, $status)
    {
        try {
            $stmtInsert = $this->conn->prepare("UPDATE lamps SET lamp_on = ? WHERE lamp_id = ?");
            $stmtInsert->bindParam(1, $status, PDO::PARAM_BOOL);
            $stmtInsert->bindParam(2, $id, PDO::PARAM_INT);

            $stmtInsert->execute();
            $stmtInsert->debugDumpParams();
            return $stmtInsert->rowCount();
        } catch (Exception | PDOException $e) {
            echo 'Falló la actualización: ' . $e->getMessage();
        }
    }

    public function drawLampsList()
    {
        $lamps = $this->getAllLamps();
        $output = "";
        foreach ($lamps as $lamp) {
            $state = $lamp->getLampOn() ? "on" : "off";
            $changeState = $lamp->getLampOn() ? "off" : "on";
            $output .= "<div class='element $state'>";
            $output .= "<h4><a href='changestatus.php?id=" . $lamp->getLampId() . "&status=$changeState'><img src='img/bulb-icon-$state.png'></a> " . $lamp->getLampName() . "</h4>";
            $output .= "<h1>" . $lamp->getModelWattage() . " W.</h1>";
            $output .= "<h4>" . $lamp->getZoneName() . "</h4>";
            $output .= "</div>";
        }
        return $output;
    }

    public function drawZonesOptions()
    {
        $selectedZone =  $this->currentFilter;
        $sql = "SELECT * FROM zones";
        $zones = $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $output = "<option value='all'>All</option>";
        foreach ($zones as $zone) {
            $selected = ($zone["zone_id"] == $selectedZone) ? "selected='selected'" : "";
            $output .= "<option value='" . $zone["zone_id"] . "' $selected>" . $zone["zone_name"] . "</option>";
        }
        return $output;
    }

    public function monitor($status)
    {
        $sql = "SELECT SUM(lamp_models.model_wattage) as power FROM `lamps` INNER JOIN lamp_models on lamp_model=lamp_models.model_id  WHERE lamp_on = " . ($status == "on" ? "TRUE" : "FALSE") . ";";
        $power = $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC)["power"];

        $sql = "SELECT SUM(lamp_models.model_wattage) as power FROM `lamps` INNER JOIN lamp_models on lamp_model=lamp_models.model_id;";
        $totalPower = $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC)["power"];
        return [
            "power"=>$power,
            "total"=>$totalPower
        ];
    }
}
