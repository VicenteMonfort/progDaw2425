<?php

$arr = [3,4,2,5,1,10,7];


$altaPos = 0;
$bajaPos = 0;
$alta = 0;
$baja = 10;
$sum = 0;
$media = 0;


$datosValidos = true;

for ($i=0;$i<count($arr)){
    
}

foreach ($arr as $indice => $numero) {
    if (!is_numeric($numero) || $numero < 0 || $numero > 10) {
        $datosValidos = false;
    }

    if ($numero > $alta) {
        $altaPos = $indice;
        $alta = $numero;
    }
    if ($numero < $baja) {
        $bajaPos = $indice;
        $baja = $numero;
    }
}
echo "$bajaPos - $altaPos <br>";
if ($datosValidos) {
    echo "Notas introducidas: " . implode(",", $arr) . "<br>";
    array_splice($arr, $altaPos, 1);
    if ($altaPos < $bajaPos) $bajaPos--; // al quitar el anterior elemento, $bajaPos debe re-ajustarse
    array_splice($arr, $bajaPos, 1);

    echo "Notas sin la mas alta ni la mas baja: " . implode(",", $arr) . "<br>";

    foreach ($arr as $dato){
        $sum += $dato;
    }
    $media = $sum / count($arr);
    echo "La media de las notas es: $media <br>";
} else {
    echo "Notas fuera de rango (0-10) o No numéricas";
}
