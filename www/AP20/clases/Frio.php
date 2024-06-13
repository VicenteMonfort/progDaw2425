<?php
class Frio extends Producto{
    protected $temperaturaMantenimiento;

    public function __construct($temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen)
    {
        $this->temperaturaMantenimiento = $temperaturaMantenimiento;
        parent::__construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen);
    }
}