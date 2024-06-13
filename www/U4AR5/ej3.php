<?php
/*
Ejercicio 3.- A partir de los arrays proporcionados:

$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];

crea un array con la siguiente estructura y muéstralo con var_dump():

$capitals = [
    [
        'country' =>"Japan",
        'city' =>"Tokyo"
    ],
    [
        'country' =>"Mexico",
        'city' =>"Mexico City"
    ],
    [
        'country' =>"USA",
        'city' =>"New York City"
    ],
    [
        'country' =>"India",
        'city' =>"Mumbai"
    ],
    [
        'country' =>"Korea",
        'city' =>"Seoul"
    ],
    [
        'country' =>"China",
        'city' =>"Shanghai"
    ],
    [
        'country' =>"Nigeria",
        'city' =>"Lagos"
    ],
    [
        'country' =>"Argentina", 
        'city' =>"Buenos Aires" 
    ],
    [
        'country' =>"Egypt",
        'city' =>"Cairo"
    ],
    [
        'country' =>"England",
        'city' =>"London"
    ]
];

*/
$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];
$capitals = [];
for ($i = 0; $i < count($city); $i++) {
    $countryCity = [];
    $countryCity["country"] = $country[$i];
    $countryCity["city"] = $city[$i];
    array_push($capitals, $countryCity);
}

var_dump($capitals);
