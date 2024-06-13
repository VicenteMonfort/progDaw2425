<?php
 class Animal{
    private $nombre;
    private $edad;
    
 
    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
    function __construct($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    function describir(){
        return "El perro se llama " . $this->getNombre() . " " . "tiene " . $this->getEdad();
    
    }
 }
 echo "<h1>Animal</h1>";
 $animal = new Animal("Manolo","3");
 echo $animal->describir();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <a href="perro.php">Perro</a>
    <a href="gato.php">Gato</a>
</body>
</html>