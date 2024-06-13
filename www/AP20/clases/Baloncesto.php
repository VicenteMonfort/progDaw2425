<?php
class Baloncesto extends Deporte{
    protected $canastas;

    public function __construct($canastas, $jugadores = 0, $tiempoPartido = 0, $tipoCampo = "")
    {
        $this->canastas = $canastas;
        parent::__construct($jugadores, $tiempoPartido, $tipoCampo);
    }
}