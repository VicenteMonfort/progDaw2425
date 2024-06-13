<?php

$arr = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4],
];

echo "Array original: <br>";
foreach ($arr as $fila) {
    echo implode(",", $fila) . "<br>";
}

echo "Paso de filas a columnas: <br>";

//UTILIZANDO push
/*$arrTrans = [];
for ($i = 0; $i < count($arr[0]); $i++) {
    array_push($arrTrans, []);
    for ($j = 0; $j < count($arr); $j++) {
        array_push($arrTrans[$i], $arr[$j][$i]);
    }
}*/

//SIN USAR push
$arrTrans = [[]];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $arrTrans[$j][$i] = $arr[$i][$j];
    }
}

foreach ($arrTrans as $fila) {
    echo implode(",", $fila) . "<br>";
}