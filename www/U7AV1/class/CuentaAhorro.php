<?php
class CuentaAhorro extends CuentaCorriente{
    private int $interes;

    //CONSTRUCTOR
    public function __construct(string $titular, int $cantidad, int $interes)
    {
        parent::__construct($titular, $cantidad);
        $this->interes = $interes;
    }

    //GETs Y SETs
    public function getInteres(): string
    {
        return $this->interes;
    }

    public function setInteres($interes): void
    {
        $this->interes=$interes;
    }
    
    //MÉTODOS (sobrecarga)
    public function ingresar($cantidad){
        $cantInteres=($this->interes*$this->cantidad/100)+$cantidad;
        $this->cantidad+=$cantInteres;
   }

   public function retirar($cantidad){
        echo "NO SE PUEDE RETIRAR EFECTIVO DE UNA CUENTA DE AHORRO<br>";
   }
}