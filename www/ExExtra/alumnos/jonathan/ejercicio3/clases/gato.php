<?php
require_once 'autoloader.php';
class Gato extends Animal{
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

public function Maullar(){
        $nombre= $this->getNombre(); 
        $edad= $this->getEdad();  

    echo"El gato" . " " . $nombre . " " . "que tiene" . " " . $edad . " " . "años" . "esta maullando";
}

$newGato = new Gato('Toby', 5, 'Siames');
$newGato->Maullar();
}