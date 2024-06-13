<?php
class CuentaCorriente
{
    protected $titular;
    protected $cantidad;

    //CONSTRUCTOR
    public function __construct(string $titular, int $cantidad)
    {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
    }

    //GETs Y SETs
    public function getTitular(): string
    {
        return $this->titular;
    }

    public function getCantidad(): int
    {
        return $this->cantidad;
    }

 
    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }

    public function setCantidad(int $cantidad): void
    {
        $this->cantidad = $cantidad;
    }
    
   //MÉTODOS
   public function ingresar($cantidad){
        $this->cantidad+=$cantidad;
   }

   public function retirar($cantidad){
        if ($this->cantidad<$cantidad){
            echo "SALDO INSUFICIENTE";
        }
        else{
            $this->cantidad-=$cantidad;
        }
   }
    
}
?>