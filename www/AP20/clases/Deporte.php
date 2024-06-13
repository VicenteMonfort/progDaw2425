<?php

class Deporte
{
    protected $jugadores;
    protected $tiempoPartido;
    protected $tipoCampo;

    public function __construct($jugadores, $tiempoPartido, $tipoCampo)
    {
        $this->jugadores = $jugadores;
        $this->tiempoPartido = $tiempoPartido;
        $this->tipoCampo = $tipoCampo;
    }
}
