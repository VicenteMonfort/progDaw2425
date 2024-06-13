<?php
require_once "autoload.php";

$deportes = [];
for ($i = 0; $i < 5; $i++) {
    $tipoObjeto = random_int(1, 3);
    switch ($tipoObjeto) {
        case 1:
            $obj = new Futbol(random_int(0, 12), 11, 90, "estadio");
            break;
        case 2:
            $obj = new Baloncesto(random_int(0, 120), 5, 40, "pabellón");
            break;
        case 3:
            $obj = new Rugby(random_int(0, 10), 15, 60, "patatal");
            break;
    }
    array_push($deportes, $obj);
}

var_dump($deportes);

/* $deportes = [];
$opciones = ["Futbol", "Baloncesto", "Rugby"];
for ($i = 0; $i < 5; $i++) {
    $tipoObjeto = random_int(0, count($opciones) - 1);
    $nombreClase = $opciones[$tipoObjeto];
    $obj = new $nombreClase(random_int(0, 120));
    array_push($deportes,$obj);
}
var_dump($deportes); */