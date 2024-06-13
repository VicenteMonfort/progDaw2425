<?php
class Producto
{
    protected $fechaCaducidad;
    protected $numeroLote;
    protected $fechaEnvasado;
    protected $paisOrigen;

    public function __construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen)
    {
        $this->fechaCaducidad = $fechaCaducidad;
        $this->numeroLote = $numeroLote;
        $this->fechaEnvasado = $fechaEnvasado;
        $this->paisOrigen = $paisOrigen;
    }
}
