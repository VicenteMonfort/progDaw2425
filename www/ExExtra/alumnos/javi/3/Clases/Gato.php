<?php

require_once "autoloader.php";

class Gato extends Animal {

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad, $raza);
    }

    public function maullar() {
        parent::describir();
    }
}

$gato = new Animal("Michi", 4, "El gato esta maullando");
?>