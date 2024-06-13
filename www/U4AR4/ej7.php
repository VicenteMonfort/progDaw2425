<?php

$arr = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

echo "Array original: ";
echo implode(",", $arr) . "<br>";

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == 0) {
        array_splice($arr,$i, 1);
        array_push($arr,0);
    }
}

echo "Array modific: ";
echo implode(",", $arr) , "<br>";