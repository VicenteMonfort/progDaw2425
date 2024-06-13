<?php
class Animal
{
    protected $nombre;
    protected $edad;


    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }


    public function describir(){
        echo "Nombre: $this->nombre, Edad: $this->edad, ";
    }
}
