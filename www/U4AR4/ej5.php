<?php

$array = [4, 1, 2, 3, 3, 3, 2, 1, 4, 3, 1, 4];
$tam = count($array);
$arrRep = [];

for ($i = 0; $i < $tam; $i++) {
    if (!in_array($array[$i], $arrRep)) {
        $cuantas = 1;
        for ($j = $i+1; $j < $tam; $j++) {
            if ($array[$i] == $array[$j]) {
                $cuantas++;
            }
        }
        array_push($arrRep, $array[$i]);
        echo "el número " . $array[$i] . " aparece " . $cuantas . " veces. <br>";
    }
}
    




?>