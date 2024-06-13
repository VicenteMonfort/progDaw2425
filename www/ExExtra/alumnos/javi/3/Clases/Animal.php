<?php

require_once "autoloader.php";

class Animal {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function describir() {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Edad: " . $this->edad . "\n";
    }
}

$animal = new Animal ("Pedro",8);

$animal->describir();
$gato->maullar();
$perro->ladrar();

?>

