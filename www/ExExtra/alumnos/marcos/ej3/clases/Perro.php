<?php
require_once ('autoloader.php');
class Perro extends Animal{
    
    private $raza;
    
    public function getRaza()
    {
        return $this->raza;
    }

    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }
    function __construct($nombre,$edad,$raza){
        parent::__construct($nombre,$edad);
        $this->raza=$raza;
    }
    function ladrar(){
        return "El perro esta ladrando";
    }
    function mostrarinfo(){
        return "El perro se llama " . $this->getNombre() . " " . "tiene " . $this->getEdad() . " y es de raza " . $this->getRaza();
    }
 }
 echo "<h1>Perro</h1>";
 $perro = new Perro("Manolo",3,"Golden");
 echo $perro->mostrarinfo();
 echo $perro->ladrar();