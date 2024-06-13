<?php
class Matrix
{
    private $rows;
    private $columns;
    private $matrix;

    public function __construct(int $rows, int $columns)
    {
        $this->rows = $rows;
        $this->columns = $columns;
        $this->setMatrix();
    }
    public function getRows(): int
    {
        return $this->rows;
    }
    public function getColumns(): int
    {
        return $this->columns;
    }

    private function setMatrix(): void
    {
        $this->matrix = null;
        for ($row = 0; $row < $this->rows; $row++) {
            for ($col = 0; $col < $this->columns; $col++) {
                $this->matrix[$row][$col] = null;
            }
        }
    }
    public function setRandomValues(int $min, int $max): void
    {
        for ($row = 0; $row < $this->rows; $row++) {
            for ($col = 0; $col < $this->columns; $col++) {
                $this->matrix[$row][$col] = random_int($min, $max);
            }
        }
    }
    public function setPosValue(int $row, int $col, int $value): void
    {
        $this->matrix[$row][$col] = $value;
    }
    public function getPosValue(int $row, int $col): ?int
    {
        return $this->matrix[$row][$col];
    }
    public function drawTable(): string
    {
        $output = "<table border='1'>";
        for ($row = 0; $row < $this->rows; $row++) {
            $output .= "<tr>";
            for ($col = 0; $col < $this->columns; $col++) {
                $output .= "<td>" . $this->matrix[$row][$col] . "</td>";
            }
            $output .= "</tr>";
        }
        $output .= "</table>";
        return $output;
    }
    
}
?>