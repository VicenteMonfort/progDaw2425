<?php
class Modelo extends Conexion
{
    private $dateFormatter;
    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->dateFormatter = new Generica();
    }
    public function init($file)
    {
        if ($this->deleteList()) {
            $this->importar($file);
        }
    }
    private function deleteList()
    {
        $sql = "DELETE FROM tareas;";

        return $this->conn->query($sql);
    }
    private function importar($file)
    {
        $titulo = "";
        $descripcion = "";
        $fechaCreacion = "";
        $fechaVencimiento = "";

        $stmt = $this->conn->prepare("INSERT INTO tareas (titulo,descripcion,fecha_creacion,fecha_vencimiento) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $titulo, $descripcion, $fechaCreacion, $fechaVencimiento);
        $gestor = fopen($file, "r");

        while (($datos = fgetcsv($gestor)) !== false) {
            $titulo = $datos[1];
            $descripcion = $datos[2];
            $fechaCreacion = $datos[3];
            $fechaVencimiento = $datos[4];
            if (!$stmt->execute()) {
                echo "Error: " . $this->conn->error . "<br>";
            }
        }
        $stmt->close();
        fclose($gestor);
    }
    public function getAllTasks()
    {
        $sql = "SELECT * FROM tareas " . $this->getOrderSQL() . $this->getPaginationSQL();
        return $this->conn->query($sql);
    }
    public function getTotalOfTasks()
    {
        $sql = "SELECT COUNT(*) as TOTAL FROM tareas";
        return $this->conn->query($sql)->fetch_assoc()["TOTAL"];
    }
    public function showAllTasks()
    {
        $result = $this->getAllTasks();
        $output = "";
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $output .= "<tr>";
                $output .= "<td>" . $rows["id"] . "</td>";
                $output .= "<td><a href='detalle.php?id=" . $rows["id"] . "'>" . $rows["titulo"] . "</td>";
                $output .= "<td>" . $this->dateFormatter->toDate($rows["fecha_vencimiento"]) . "</td>";
                //$output .= "<td>" . Generica::toDate($rows["fecha_vencimiento"]) . "</td>";
                $output .= "<td><a href='modifica.php?id=" . $rows["id"] . "'>editar</a></td>";
                $output .= "<td><a href='borrar.php?id=" . $rows["id"] . "'>borrar</a></td>";
                $output .= "</tr>";
            }
        } else {
            $output = "no existe ningún registro en tareas";
        }
        return $output;
    }
    public function getTask($id, $raw = false)
    {
        $sql = "SELECT * FROM tareas WHERE id=$id";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (!$raw) {
                $row["fecha_vencimiento"] = $this->dateFormatter->toDate($row["fecha_vencimiento"]);
                $row["fecha_creacion"] = $this->dateFormatter->toDate($row["fecha_creacion"]);
            }
            return $row;
        }
        return null;
    }
    public function addTask($request)
    {
        $titulo = $request["title"];
        $descripcion = $request["description"];
        $fechaVencimiento = $request["dueDate"];

        $stmt = $this->conn->prepare("INSERT INTO tareas (titulo,descripcion,fecha_creacion,fecha_vencimiento) VALUES (?,?,CURDATE(),?)");
        $stmt->bind_param("sss", $titulo, $descripcion, $fechaVencimiento);
        if (!$stmt->execute()) {
            echo "Error: " . $this->conn->error . "<br>";
        }
        $stmt->close();
    }
    public function updateTask($request)
    {
        $id = $request["id"];
        $titulo = $request["title"];
        $descripcion = $request["description"];
        $fechaVencimiento = $request["dueDate"];

        $stmt = $this->conn->prepare("UPDATE tareas SET titulo=?, descripcion=?,fecha_vencimiento=? WHERE id=?");
        $stmt->bind_param("sssi", $titulo, $descripcion, $fechaVencimiento, $id);
        if (!$stmt->execute()) {
            echo "Error: " . $this->conn->error . "<br>";
        }
        $stmt->close();
    }
    public function deleteTask($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM tareas  WHERE id=?");
        $stmt->bind_param("i", $id);
        if (!$stmt->execute()) {
            echo "Error: " . $this->conn->error . "<br>";
        }
        $stmt->close();
    }
    public function showNavigator()
    {
        $currentPage = $this->getState("page", 1);
        $registersTotal = $this->getTotalOfTasks();
        $pagesTotal = ceil($registersTotal / $this->registersPerPage);
        $output = "";
        for ($i = 1; $i <= $pagesTotal; $i++) {
            if ($i == $currentPage) {
                $output .= "<strong>$i</strong>";
            } else {
                $output .= "<a href='?page=$i'>$i</a> ";
            }
        }
        return $output;
    }
    public function showOrderAction($fieldForOrdering, $label)
    {
        $output = "";
        $order = $this->getOrder();
        $orderingAction = ($order["orderType"] == "ASC") ? "DESC" : "ASC";
        if ($fieldForOrdering == $order["orderField"]) {
            $orderingIcon = ($order["orderType"] == "ASC") ? "&#9650;" : "&#9660;";
        } else {
            $orderingIcon = "";
            $orderingAction = "ASC";
        }
        $output .= "<a href='?page=1&orderField=" . $fieldForOrdering . "&orderType=" . $orderingAction . "'>";
        $output .= $label . " " . $orderingIcon;
        $output .= "</a>";
        return $output;
    }
    private function getPaginationSQL()
    {
        $currentPage = $this->getState("page", 1);
        $firstRegister = $this->registersPerPage * ($currentPage - 1);
        return " LIMIT $firstRegister, " . $this->registersPerPage;

    }
    private function getOrder()
    {
        $orderField = $this->getState("orderField", null);
        $orderType = $this->getState("orderType", "ASC");
        if ((!is_null($orderField))) {
            return ["orderField" => $orderField, "orderType" => $orderType];
        } else {
            return null;
        }
    }
    private function getOrderUrlParam()
    {
        $order = $this->getOrder();
        return (!is_null($order)) ? $order["orderField"] . "=" . $order["orderType"] : null;
    }
    private function getOrderSQL()
    {
        $order = $this->getOrder();
        return (!is_null($order)) ? " ORDER BY " . $order["orderField"] . " " . $order["orderType"] : "";
    }
    private function getState($variable, $default)
    {
        if (isset($_GET[$variable])) {
            $_SESSION[$variable] = $_GET[$variable];
            return $_GET[$variable];
        } elseif (isset($_SESSION[$variable])) {
            return $_SESSION[$variable];
        } else {
            return $default;
        }
    }
}
