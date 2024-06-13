<!DOCTYPE html>
<html>
<head>
    <title>Carrera</title>
</head>
<body>
    <h1>Carrera</h1>


<?php

$posiciones = ["Ana","Oswaldo","Raúl","Celia", "María","Antonio"];
print_r($posiciones);
echo "<br>";
//intercambia posiciones
$posCelia= array_search("Celia",$posiciones);
$posRaul= array_search("Raúl",$posiciones);
$aux=$posiciones[$posCelia];
$posiciones[$posCelia]=$posiciones[$posRaul];
$posiciones[$posRaul]=$aux;
print_r($posiciones);
echo "<br>";

array_pop($posiciones);
print_r($posiciones);
echo "<br>"; 
array_splice($posiciones,0,0,["Roberto","Amaya"]);
print_r($posiciones);
echo "<br>"; 
array_unshift($posiciones,"Marta");
print_r($posiciones);

echo "<br>"; 


?>


</body>
</html>
