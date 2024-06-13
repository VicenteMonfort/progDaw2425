<?php
require_once ('autoloader.php');
class Gato extends Animal{
    private $raza;

    function __construct($nombre,$edad,$raza){
        parent::__construct($nombre,$edad);
    }
    function maullar(){
        return "El gato esta maullando";
    }
    function mostrarinfo(){
        return "El perro se llama " . $this->getNombre() . " " . "tiene " . $this->getEdad() . " y es de raza " . $this->getRaza();
    }
 }
 echo "<h1>Gato</h1>";
 $gato = new Gato("Manolo",3,"Golden");
 echo $gato->maullar();
 echo $gato->mostrarinfo();