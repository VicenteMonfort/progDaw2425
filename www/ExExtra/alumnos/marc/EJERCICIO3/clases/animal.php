<?php

class Animal {
    protected $nombre;
    protected $edad;
   

    public function __construct($nombre, $edad) {
        $this->setNombre($nombre);
        $this->setEdad($edad);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }


    public function describir() {
        return "El nombre del Animal es: {$this->getNombre()}, y tiene: {$this->getEdad()}<br>";
    }


}
?>



