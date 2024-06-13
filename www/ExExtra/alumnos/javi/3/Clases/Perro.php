<?php

require_once "autoloader.php";

class Perro extends Animal {
    public $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }

    public function ladrar() {
        parent::describir();
        echo "Curso: " . $this->raza . "\n";
    }
}

$perro = new Animal("Terreneitor", 2, "El perro esta ladrando", "Y la raza es" . $this->raza);

?>