<?php

class Gato extends Animal {


 public function __construct($nombre, $edad) {
    parent::__construct($nombre, $edad);
}

public function describir() {
    return "El nombre del Gato es: {$this->getNombre()}, y tiene: {$this->getEdad()} años<br>";
}
public function maullar() {
    return "El gato: {$this->getNombre()}, esta maullando<br>";
}

}

?>