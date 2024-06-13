<?php

class Perro extends Animal {
    private $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->setRaza($raza);
    }

    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function describir() {
        return "El nombre del Perro es: {$this->getNombre()}, y tiene: {$this->getEdad()} años<br>";
    }

    public function ladrar() {
        return "El perro: {$this->getNombre()}, esta ladrando<br>";
    }

}
?>