<?php

class MatrixOps
{
    private Matrix $matrix1;
    private Matrix $matrix2;

    public function __construct(Matrix $matrix1, Matrix $matrix2)
    {
        $this->matrix1 = $matrix1;
        $this->matrix2 = $matrix2;
    }

    public function sumMatrix(): ?Matrix
    {
        if ($this->compareMatrix()) {
            $resultMatrix = new Matrix($this->matrix1->getRows(), $this->matrix1->getColumns());
            for ($row = 0; $row < $this->matrix1->getRows(); $row++) {
                for ($col = 0; $col < $this->matrix1->getColumns(); $col++) {
                    $sumPos = $this->matrix1->getPosValue($row, $col) + $this->matrix2->getPosValue($row, $col);
                    $resultMatrix->setPosValue($row, $col, $sumPos);
                }
            }
            return $resultMatrix;
        }else{
            return null;
        }
    }
    public function multMatrix(): ?Matrix
    {
        if ($this->compareMatrix()) {
            $resultMatrix = new Matrix($this->matrix1->getRows(), $this->matrix1->getColumns());
            for ($row = 0; $row < $this->matrix1->getRows(); $row++) {
                for ($col = 0; $col < $this->matrix1->getColumns(); $col++) {
                    $sumPos = $this->matrix1->getPosValue($row, $col) * $this->matrix2->getPosValue($row, $col);
                    $resultMatrix->setPosValue($row, $col, $sumPos);
                }
            }
            return $resultMatrix;
        }else{
            return null;
        }
    }
    private function compareMatrix(): bool{
        return ($this->matrix1->getRows() != $this->matrix2->getRows() || $this->matrix1->getColumns() != $this->matrix2->getColumns()) ? false : true;
    }
}
?>