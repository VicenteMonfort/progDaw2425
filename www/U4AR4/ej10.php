<?php

$arr = [1, 3, 3, 8, 4, 3, 2, 3, 3];

for ($i = 0; $i < count($arr); $i++) {
    $leftSide = 0;
    $rightSide = 0;
    for ($j = 0; $j <= $i; $j++) {
        $leftSide += $arr[$j];
    }
    for ($j = $i + 1; $j < count($arr); $j++) {
        $rightSide += $arr[$j];
    }
    if ($rightSide == $leftSide) {
        echo "[" . implode(",", array_slice($arr, 0, $i + 1)) . "]=" . $leftSide . "\n[" . implode(",", array_slice($arr, $i + 1)) . "]=" . $rightSide . "\n";
    }

}