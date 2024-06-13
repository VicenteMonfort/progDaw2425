<?php
class Gato extends Animal {

    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad);
    }

    public function maullar() {
        echo "El gato está maullando";
    }
}
?>