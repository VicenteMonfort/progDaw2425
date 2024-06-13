<!DOCTYPE html>
<html>
<head>
    <title>Cálculo precio</title>
</head>
<body>
    <h1>Cálculo precio UVA</h1>
    
    <?php
   
    $kilos = 0;
    $tipo = "";
    $tamano = 0;
  
   $precioKilo = 2; // el precio lo consideramos fijo
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kilos = $_POST["kilos"];
        $tipo = $_POST["tipo"];
        $tamano = $_POST["tamano"];  
        if ($tipo == "A") {
            if ($tamano == 1) {
                $precioKilo += 0.2;
            } else {
                $precioKilo += 0.3;
            }
        } else {
            if ($tamano == 1) {
                $precioKilo -= 0.3;
            } else {
                $precioKilo -= 0.5;
            }
        }

        //Con switch
        /*
        switch ($tipo) {
            case "A":
                switch ($tamano) {
                    case 1:
                        $precioKilo += 0.2;
                        break;
                    case 2:
                        $precioKilo += 0.3;
                        break;
                }
                break;
            case "B":
                switch ($tamano) {
                    case 1:
                        $precioKilo -= 0.3;
                        break;
                    case 2:
                        $precioKilo -= 0.5;
                        break;
                }
                break;
        }
        */
        $precio = $kilos * $precioKilo;
        echo "El productor recibe $precio € por $kilos kg\n";
       
   }
        
    ?>
    
    <form method="POST" action="">
        <label for="kilos">Kilos:</label>
        <input type="number" id="kilos" name="kilos" value="">
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="">
        <label for="tamano">Tamaño:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>