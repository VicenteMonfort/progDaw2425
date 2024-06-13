<?php

$repes = [1, 2, 3, 4, 3, 7, 3, 4, 5, 5];
$tam = count($repes)-1;


for ($i = 0; $i<$tam; $i++){
    $actual = $repes[$i];
    $repite = 0;
    for ($j = $i+1; $j<=$tam; $j++){
            $siguiente = $repes[$j];
            if ($actual == $siguiente){
                $repite++;
            }
    }
    if ($repite > 0){
        echo "El elemento $actual se repite <br>";
    }
}
    




?>