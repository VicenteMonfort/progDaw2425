<?php

$visits = array();

/**
 * Generate random date between 1-1-2010 1-1-2024
 * 
 * @return date
 */

function random_date($format = "Y-m-d", $limitLow = "2010-01-01", $limitHigh = "2024-01-01"){
	$msLimitLow = strtotime($limitLow);
	$msLimitHigh = strtotime($limitHigh);
	$msRandom = mt_rand($msLimitLow, $msLimitHigh);
    return date($format, $msRandom);
}

for ($i = 1; $i <= 100; $i++) {
    $visits[] = array(
        "id" => $i, //visit id
        "name" => "Patient" . rand(0, 50),
        "bill" => rand(50, 500),
		"date" => random_date(),
		"paid" => rand(0,1) == 0 ? "True" : "False"
    );
}

foreach ($visits as $visit) {
    echo "Patient ID: " . $visit['id'] . "<br>";
    echo "Patient Name: " . $visit['name'] . "<br>";
    echo "Bill: " . $visit['bill'] . "<br>";
    echo "Date: " . $visit['date'] . "<br>";
	echo "Paid: " . $visit['paid'] . "<br>";
    echo "------------------------<br>";
}

$gestor = fopen("data.csv", "w");
foreach($visits as $fila){
	fputcsv($gestor, array_values($fila));
}

fclose($gestor);
?>