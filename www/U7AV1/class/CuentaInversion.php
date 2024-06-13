<?php
class CuentaInversion extends CuentaCorriente{
    private int $inversion;

    //CONSTRUCTOR
    public function __construct(string $titular, int $cantidad, int $inversion)
    {
        parent::__construct($titular, $cantidad);
        $this->inversion = $inversion;
    }

    //GETs Y SETs
    public function getInversion(): string
    {
        return $this->inversion;
    }

    public function setInversion($inversion): void
    {
        $this->inversion=$inversion;
    }
    
    //MÉTODOS (sobrecarga)

    public function retirar($cantidad){
        $disponible=$this->cantidad-($this->cantidad*$this->inversion/100);
        if ($disponible<$cantidad){
            echo "SALDO INSUFICIENTE. ";
            echo "Puedes retirar " . $disponible . "€ de los " . $this->cantidad . "€ que dispones<br>";
        }
        else{
            $this->cantidad-=$cantidad;
        }
    }
}
