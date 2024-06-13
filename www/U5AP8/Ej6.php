<!DOCTYPE html>
<html>
<head>
    <title>Ej6</title>
</head>
<body>
    <h1>Ej6</h1>
<?php


$car="*";
$n=12;
dibujo($car, $n);


function dibujo($caracter, $num){
    $repe = 1;
    //ascendente
    for ($i=1; $i<=$num; $i++){ //controla las lineas
         for ($j=1; $j<=$repe; $j++){ //controla las repeteciones de cada linea
            echo $caracter;
        }
        $repe+=2;
        echo "<br>";
    }
    $repe-=2; //para restaurar nº de repes al final
    $repe-=2; //para empezar a pintar descendente (no me repita linea)
    //descendente
    for ($i=1; $i<=$num; $i++){
        for ($j=$repe; $j>=1; $j--){
            echo $caracter;
        }
        $repe-=2;
        echo "<br>";
    }
}


?>

