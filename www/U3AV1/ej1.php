<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php

    $precio = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paquetes = $_POST["paquetes"];
        $tamano = $_POST["tamano"];
        $peso = $_POST["peso"];
        $zona = $_POST["zona"];


        //Cálculo del precio dependiendo del tamaño
        if ($tamano <= 0.5) {
            $precio = $tamano*50;
        } elseif ($tamano <= 1) {
                $precio = $tamano*75;
            } else{
                $precio = $tamano*100;
            }

        //Cálculo del precio dependiendo del peso
        if ($peso >= 15) {
            $precio = -1;
        } elseif ($peso >= 10) {
            $precio = $precio*1.5;
        } elseif ($peso >= 5) {
            $precio = $precio*1.5;
        }

        //Cálculo del precio dependiendo del destino
        switch ($zona) {
            case "A":
                $incremento = $precio*0.10;
                break;
            case "C":
                $incremento = $precio*0.10;
                break;
            default:
                $incremento = 0;
                
        }
        $precio += $incremento;
        $precio = $precio * $paquetes;

        if ($precio >= 0){
            echo "El precio total del envío es de: $precio €";
        } else {
            echo "NO SE ADMITE EL ENVÍO.</br>El peso del paquete excede el límite de 15kg.";
        }
        
    }

    ?>
    
    <form method="POST" action="">
        <label for="paquetes">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" step="any" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" step="any" id="peso" name="peso" value="">
        <label for="zona">ZONA:</label>
        <input type="text" id="zona" name="zona" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>