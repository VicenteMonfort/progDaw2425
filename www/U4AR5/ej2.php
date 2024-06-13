<?php
/*
Ejercicio 2.- A partir del array proporcionado:

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

crea un array con la siguiente estructura y muéstralo con var_dump():

$capitals = [
    'country' =>"Japan",
    'country' =>"Mexico",
    'country' =>"USA",
    'country' =>"India",
    'country' =>"Korea",
    'country' =>"China",
    'country' =>"Nigeria",
    'country' =>"Argentina", 
    'country' =>"Egypt",
    'country' =>"England"
];

*/
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$countryArray = explode(",",$country);
$capitals = [];
for ($i = 0; $i < count($countryArray); $i++) {
    $countryCity["country"] = $countryArray[$i];
    array_push($capitals, $countryCity);
}

var_dump($capitals);