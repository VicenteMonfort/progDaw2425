<?php
/*
Ejercicio 1.- A partir del array proporcionado:

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";

crea un array con la siguiente estructura y muéstralo con var_dump():

$capitals = [
    'city' =>"Tokyo",
    'city' =>"Mexico City",
    'city' =>"New York City",
    'city' =>"Mumbai",
    'city' =>"Seoul",
    'city' =>"Shanghai",
    'city' =>"Lagos",
    'city' =>"Buenos Aires", 
    'city' =>"Cairo",
    'city' =>"London"
];

*/
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$cityArray = explode(",",$city);
$capitals = [];
for ($i = 0; $i < count($cityArray); $i++) {
    $countryCity["city"] = $cityArray[$i];
    array_push($capitals, $countryCity);
}

var_dump($capitals);