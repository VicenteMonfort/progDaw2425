<?php
class Nitrogeno extends Congelados{
    protected $metodo;
    protected $tiempo;
    public function __construct($metodo, $tiempo, $temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen)
    {
        $this->metodo = $metodo;
        $this->tiempo = $tiempo;
        parent::__construct($temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen);
    }

} 