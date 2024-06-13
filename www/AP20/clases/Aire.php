<?php
class Aire extends Congelados{
    protected $composicion;
    public function __construct($composicion, $temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen)
    {
        $this->composicion = $composicion;
        parent::__construct($temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen);
    }

} 