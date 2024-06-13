<?php

$orden = ["Ana","Oswaldo","Raúl","Celia", "María","Antonio"];
print_r($orden);
echo "<br>";
$tam = count($orden);
$max = $tam - 1;

while ($max >= 0){
    echo $orden[$max], " - ";
    $max--;
}

?>