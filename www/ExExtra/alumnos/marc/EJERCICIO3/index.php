<?php
require_once "autoloader.php";
$perro = new Perro("Chop", 3, "Bulldog");
$gato = new Gato("Gala", 4);


echo $perro->describir();
echo $perro->ladrar();
echo $gato->describir();
echo $gato->maullar();

?>