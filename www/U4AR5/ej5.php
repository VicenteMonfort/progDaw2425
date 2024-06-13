<?php
/*
Ejercicio 5.- A partir del string proporcionado, crea un array usando la función explode():

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";

con la misma estructura del ejercicio anterior y muéstralo con var_dump():
*/
$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";


$countries = explode("; ",$data);

$capitals = [];
foreach($countries as $country) {
    $countryData = explode(", ",$country);
    $countryCity["country"] = $countryData[1];
    $countryCity["city"] = $countryData[0];
    array_push($capitals, $countryCity);
}

var_dump($capitals);