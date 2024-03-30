<?php

class Gestion extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBrands()
    {
        $output = "";
        $sql = "SELECT * FROM brands ORDER BY brandName ASC";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $output .= "<input type='checkbox' value='" . $rows["brandId"] . "' name='" . $rows["brandName"] . "'> " . $rows["brandName"] . "<br>";
            }
        } else {
            $output = "no existe ningún cliente";
        }
        return $output;
    }
}
