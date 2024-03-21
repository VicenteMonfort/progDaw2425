<?php
class Modelo extends Conexion
{
    private function getAllProducts()
    {
        $sql = "SELECT * FROM PRODUCTO";
        return $this->conn->query($sql);
    }

    public function showAllProducts()
    {
        $result = $this->getAllProducts();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['PROD_NUM'] . "</div>
                <div class='divTableCell'>" . $row['DESCRIPCION'] . "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }

    private function getAllEmp()
    {
        $sql = "SELECT EMP_NO, APELLIDOS, DEPT_NO, FECHA_ALTA, SALARIO FROM EMP";
        return $this->conn->query($sql);
    }

    private function depClass($dept)
    {
        return " depClass" . $dept;
    }

    private function fechaFormateada($fecha)
    {
        $date = new DateTime($fecha);
        return $date->format('d/m/Y');
    }

    private function formatoMoneda($valor)
    {
        return number_format($valor, 2, ",", ".") . "€";
    }

    public function showAllEmp()
    {
        $result = $this->getAllEmp();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['EMP_NO'] . "</div>
                <div class='divTableCell'>" . $row['APELLIDOS'] . "</div>
                <div class='divTableCell" . $this->depClass($row['DEPT_NO']) . "'>&nbsp;</div>
                <div class='divTableCell'>" . $this->fechaFormateada($row['FECHA_ALTA']) . "</div>
                <div class='divTableCell'>" . $this->formatoMoneda($row['SALARIO']) . " €</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }

    private function getAllClientes($order)
    {
        $order = ($order == 'DESC') ? 'DESC' : 'ASC';
        $sql = "SELECT CLIENTE_COD, NOMBRE, CIUDAD FROM CLIENTE ORDER BY NOMBRE " . $order;
        return $this->conn->query($sql);

    }

    public function showAllClientes($order)
    {
        $result = $this->getAllClientes($order);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['CLIENTE_COD'] . "</div>
                <div class='divTableCell'>" . $row['NOMBRE'] . "</div>
                <div class='divTableCell'>" . $row['CIUDAD'] . "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }

    private function getPedidoOver($total)
    {
        $total = (is_numeric($total) ? $total : 0);
        $sql = "SELECT PEDIDO_NUM, CLIENTE_COD, TOTAL FROM PEDIDO WHERE TOTAL >= " . $total;
        return $this->conn->query($sql);
    }

    public function showPedidoOver($total)
    {
        $result = $this->getPedidoOver($total);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['PEDIDO_NUM'] . "</div>
                <div class='divTableCell'>" . $row['CLIENTE_COD'] . "</div>
                <div class='divTableCell'>" . $this->formatoMoneda($row['TOTAL']) . "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }

    private function getLineasPedido($pedido)
    {
        $pedido = (is_numeric($pedido) ? $pedido : 0);
        $sql = "SELECT PEDIDO_NUM, DETALLE_NUM, IMPORTE FROM DETALLE WHERE PEDIDO_NUM = " . $pedido;
        return $this->conn->query($sql);
    }

    private function getLineasPedidoMayor($pedido)
    {
        $sql = "SELECT DETALLE_NUM, IMPORTE FROM DETALLE WHERE PEDIDO_NUM = " . $pedido . " ORDER BY IMPORTE DESC";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row["DETALLE_NUM"];
        } else {
            return 0;
        }
    }

    public function showLineasPedido($pedido)
    {
        $result = $this->getLineasPedido($pedido);
        if ($result->num_rows > 0) {
            $mayor = $this->getLineasPedidoMayor($pedido);
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                      <div class='divTableCell'>" . $row['PEDIDO_NUM'] . "</div>
                      <div class='divTableCell'>" . $row['DETALLE_NUM'] . "</div>
                      <div class='divTableCell'>" . $this->formatoMoneda($row['IMPORTE']);
                if ($row['DETALLE_NUM'] == $mayor) {
                    echo "<img src='star-256.png' class='star'>";
                }
                echo "</div>
                </div> ";
            }
        } else {
            echo "0 results";
        }
    }
}
