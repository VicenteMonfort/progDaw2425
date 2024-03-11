<?php

require_once "autoload.php";

$connection = new Connection();
$conn = $connection->getConn();
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

$query = "DELETE FROM investment WHERE id='$id'";
$result = $conn->query($query);
header("location: list.php");
