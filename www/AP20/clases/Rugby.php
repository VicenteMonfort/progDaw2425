<?php
class Rugby extends Deporte{
    protected $ensayos;

    public function __construct($ensayos, $jugadores = 0, $tiempoPartido = 0, $tipoCampo = "")
    {
        $this->ensayos = $ensayos;
        parent::__construct($jugadores, $tiempoPartido, $tipoCampo);
    }
}