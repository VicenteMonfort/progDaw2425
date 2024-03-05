<?php

require_once "autoload.php";

$connection = new Connection();
$conn = $connection->getConn();
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (count($_POST) > 0) {
	
	$id=$_POST["id"];
    $query = "DELETE FROM investment WHERE id='$id'";
	$result = $conn->query($query);
    
}
