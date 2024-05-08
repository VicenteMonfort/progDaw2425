<?php

class Connection
{
    protected $conn;
    public function connect()
    {
        $configFile = file_get_contents(__DIR__ . "/../config/db.json");
        $dbData = json_decode($configFile, true);

        $servername = $dbData["servername"];
        $username = $dbData["username"];
        $password = $dbData["password"];
        $db = $dbData["db"];

        //Establece la conexión
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection has failed: ' . $e->getMessage();
        }
    }
    public function disconnect()
    {
        $this->conn = null;
    }
    public function __destruct()
    {
        $this->disconnect();
    }
}
