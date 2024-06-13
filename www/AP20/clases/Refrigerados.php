<?php
class Refrigerados extends Frio{
    protected $codigoOSA;

    public function __construct($codigoOSA,$temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen)
    {
        $this->codigoOSA = $codigoOSA;
        parent::__construct($temperaturaMantenimiento,$fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen);
    }

}