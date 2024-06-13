<?php
require_once "autoloader.php";

$perro = new Perro("Pastor Alemán", "Toby", 12);
$gato = new Gato("Gatete", 7);

$perro->describir();
$perro->ladrar();
$gato->describir();
$gato->maullar();
