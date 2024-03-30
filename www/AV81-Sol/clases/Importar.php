<?php

class Importar extends Conexion
{

    public function __construct($file)
    {
        parent::__construct();
        $this->customers($file);
    }

    private function customers($file)
    {
        $customerId = "";
        $customerName = "";
        $stmt = $this->conn->prepare("UPDATE customers SET customerName=? WHERE customerId = ?");
        $stmt->bind_param("ss", $customerName, $customerId);

        $gestor = fopen($file, "r");

        while (($datos = fgetcsv($gestor, 0, "#")) !== false) {
            $customerId = $datos[0];
            $customerName = $datos[1];
            $brands = ($datos[2]!="") ? explode(", ", $datos[2]):null;
            if (!$stmt->execute()) {
                echo "Error: " . $this->conn->error . "<br>";
            } else if (!is_null($brands)) {
                $this->brandCustomer($brands, $customerId);
            }
        }
        $stmt->close();
        fclose($gestor);

    }

    private function brandCustomer($brands, $customerId)
    {
        $brand = "";
        $stmt = $this->conn->prepare("INSERT INTO brandCustomer (customerId, brandId) VALUES (?,?)");
        $stmt->bind_param("ss", $customerId, $brand);
        foreach ($brands as $brandName) {
            $brand = $this->getBrandId($brandName);
            if (!is_null($brand) && !$stmt->execute()) {
                echo "Error: " . $this->conn->error . "<br>";
            }
        }
        $stmt->close();
    }

    private function getBrandId($brandName)
    {
        $sql = "SELECT brandId FROM brands WHERE brandName='$brandName'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $output = $result->fetch_assoc()["brandId"];
        } else {
            $output = null;
        }
        return $output;
    }

}
