<?php

abstract class Persona{
    //PROPIEDADES
    protected string $nombre;
    protected string $direccion;

    //CONSTRUCTOR
    public function __construct($nombre , $direccion){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    //METODOS
    abstract function getPropiedades();

}

class Estudiante extends Persona{
    //PROPIEDADES
    protected string $nif;
    protected string $fechaAlta;
    protected int $edad;

    //CONSTRUCTOR
    public function __construct($nombre , $direccion, $nif, $fechaAlta, $edad){

        parent::__construct($nombre, $direccion);
        $this->nif = $nif;
        $this->fechaAlta = $fechaAlta;
        $this->edad = $edad;
    }

    //METODOS
    public function getPropiedades(){
        return $this->nombre . " || " . $this->direccion . " || " . $this->nif . " || " . $this->fechaAlta . " || " . $this->edad   ;
    }

}

class EstudianteIntercambio extends Estudiante{
    //PROPIEDADES
    private string $paisOrigen;

    //CONSTRUCTOR
    public function __construct($nombre , $direccion, $nif, $fechaAlta, $edad, $paisOrigen){
        parent::__construct($nombre , $direccion, $nif, $fechaAlta, $edad);
        $this->paisOrigen = $paisOrigen;
    }

    public function getPropiedades(){
        return $this->nombre . " || " . $this->direccion . " || " . $this->nif . " || " . $this->fechaAlta . " || " . $this->edad;
    }
}

class Profesor extends Persona{
    //PROPIEDADES
    private string $numSS;
    private string $titulacion;
    private string $especialidad;

    //CONSTRUCTOR
    public function __construct($nombre , $direccion, $numSS, $titulacion, $especialidad){

        parent::__construct($nombre, $direccion);
        $this->numSS = $numSS;
        $this->titulacion = $titulacion;
        $this->especialidad = $especialidad;
    }

    public function getPropiedades(){
        return $this->nombre . " || " . $this->direccion;
    }
}
class PersonalGestion extends Persona{
    //PROPIEDADES
    private string $numSS;
    private string $posicion;

    //CONSTRUCTOR
    public function __construct($nombre , $direccion, $numSS, $posicion){

        parent::__construct($nombre, $direccion);
        $this->numSS = $numSS;
        $this->posicion = $posicion;
    }

    public function getPropiedades(){
        return $this->nombre . " || " . $this->direccion;
    }

}
/*no puedo dar de alta un objeto PERSONA
echo "PERSONA<br>";
$p1 = new Persona("Vicente", "C:/Principal 1"   );
echo $p1->getPropiedades() . "<br>";
echo "<br>";*/
echo "ESTUDIANTE<br>";
$e1 = new Estudiante("Pepe", "C:/Amarilla 23", "12345678", "1/1/2020", 23);
echo $e1->getPropiedades() . "<br>" ;

?>

