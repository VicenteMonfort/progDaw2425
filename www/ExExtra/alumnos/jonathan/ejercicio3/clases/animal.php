<?php

class Animal{
    protected $nombre;
    protected $edad; 

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }
    public function setEdad($edad){
        $this->edad = $edad; 
    }
    public function getNombre(){
        return $this->nombre; 
    }
    public function getEdad(){
        return $this->edad; 
    }

    public function __construct($nombre,$edad){
        $this->nombre = $nombre; 
        $this->edad = $edad; 
    }


public function Describrir(){
    $nombre = $this->nombre;
    $edad= $this->edad; 

    echo"El animal se llama" . " " . $nombre . " " . "y tiene" . " " . $edad . " " . "años";
    echo"<br>";

}
}

$new = new animal('Toby', 5);
$new->Describrir(); 


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
    

    echo"El perro" . " " . $nombre . " " . "que tiene" . " " . $edad . " " . "años" . " " . "esta ladrando";
    echo"<br>";
}


}

$llamada = new Perro('Toby', 5, 'Pastor Aleman');
$llamada->Ladrar(); 

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
    

    echo"El gato" . " " . $nombre . " " . "que tiene" . " " . $edad . " " . "años" . " " . "esta maullando";
    echo"<br>";
}

}

$migato = new Gato('kira', 10, 'puton');
$migato->Maullar(); 




?>