<?php

require_once "autoload.php";

$connection = new Connection();
$conn = $connection->getConn();
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

function randomDate($start_date, $end_date)
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('Y-m-d', $val);
}


for ($i=1;$i<50;$i++){
	$id=$i;
	$company="Company " . $i;
	$investment=rand(223,5649);
	$date=randomDate("2024/01/01","2024/12/31");
	$active=rand(0,1);
	$query = "INSERT INTO `investment`(`id`, `company`, `investment`, `date`, `active`)
			VALUES ('$id', '$company', '$investment', '$date', '$active')";
	$result = $conn->query($query);
}
	

?>