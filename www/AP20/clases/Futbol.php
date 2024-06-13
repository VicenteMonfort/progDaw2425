<?php
class Futbol extends Deporte
{
    protected $goles;

    public function __construct($goles, $jugadores = 0, $tiempoPartido = 0, $tipoCampo = "")
    {
        $this->goles = $goles;
        parent::__construct($jugadores, $tiempoPartido, $tipoCampo);
    }
}
