<?php
require_once "autoloader.php";
$perro = new Perro("Jack", "10", "Pitbull");
$gato = new Gato("Luky", "5");

echo "Información del Perro: <br>";
echo "Nombre: " . $perro->getNombre() . "<br>";
echo "Edad: " . $perro->getEdad() . "<br>";
echo "Raza: " . $perro->getRaza() . "<br>";
echo "<p>" . $perro->ladrar() . "</p>";

echo "<br>Información del Gato: <br>";
echo "Nombre: " . $gato->getNombre() . "<br>";
echo "Edad: " . $gato->getEdad() . "<br>";
echo "<p>" . $gato->maullar() . "</p>";
?>