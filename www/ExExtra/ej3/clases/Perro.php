<?php
class Perro extends Animal
{
    protected $raza;

    public function __construct($raza, $nombre, $edad)
    {
        $this->raza = $raza;
        parent::__construct($nombre, $edad);
    }

    public function describir(){
        echo "Raza: $this->raza, Nombre: $this->nombre, Edad: $this->edad, ";
    }

    public function ladrar(){
        echo "GUAU GUAU";
    }
}