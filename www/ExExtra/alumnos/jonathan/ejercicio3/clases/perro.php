<?php
require_once 'autoloader.php';
class Perro extends Animal{
    protected $raza;
    
    public function setRaza($raza){
    $this->raza = $raza;
    }
    public function getRaza(){
       return $this->raza;
    }


    public function __construc($nombre, $edad, $raza){
        parent:: __construct($nombre, $edad); 
        $this->raza = $raza; 
    }

public function Ladrar(){
    $nombre= $this->getNombre(); 
    $edad= $this->getEdad(); 


    echo"El perro" . " " . $nombre . " " . "que tiene" . " " . $edad . " " . "años" . "esta ladrando";
}


}

$llamada = new Perro('Toby', 5, 'Pastor Aleman');
$llamada->Ladrar(); 


?>