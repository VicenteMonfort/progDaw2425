<?php
class Agua extends Congelados{
    protected $salinidad;
    public function __construct($salinidad, $temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen)
    {
        $this->salinidad = $salinidad;
        parent::__construct($temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen);
    }

} 