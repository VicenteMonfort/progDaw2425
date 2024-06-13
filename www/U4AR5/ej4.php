<?php
/*
Ejercicio 4.- A partir de los strings proporcionados, crea un array usando la función explode():

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

con la misma estructura del ejercicio anterior y muéstralo con var_dump():
*/
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$cityArray = explode(",",$city);
$countryArray = explode(",",$country);

$capitals = [];
for ($i = 0; $i < count($cityArray); $i++) {
    $countryCity = [];
    $countryCity["country"] = $countryArray[$i];
    $countryCity["city"] = $cityArray[$i];
    array_push($capitals, $countryCity);
}

var_dump($capitals);