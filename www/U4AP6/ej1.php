<!DOCTYPE html>
<html>
<head>
    <title>Media</title>
</head>
<body>
    <h1>Media 5 números en array</h1>
    
    <form method="POST" action="">
        <?php
        // Utilizamos un bucle while para crear los campos de entrada.
        $contador = 1;
        while ($contador <= 5) {
            echo "<label for='numero$contador'>Dato $contador:</label>";
            echo "<input type='number' id='numero$contador' name='numero$contador' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Calcular Media">
    </form>

    <?php
    // Inicializamos variables para almacenar los datos y la suma.
    $suma = 0;
    $contador = 1;
    $numeros = [];

    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Utilizamos un bucle while para pedir 5 datos.
        while ($contador <= 5) {
            $numeros[$contador-1] = $_POST["numero$contador"];
            $contador++;
        }
        
        $contador = 0;
        // Sumamos los elementos.
        while ($contador < 5){
            $suma += $numeros[$contador];
            $contador++;
        }

        $media = $suma / 5;
        echo "</br>La media de los valores introducidos en el array es $media";
    }
    ?>


</body>
</html>