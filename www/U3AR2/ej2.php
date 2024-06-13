<!DOCTYPE html>
<html>
<head>
    <title>Cuenta números</title>
</head>
<body>
    <h1>Cuenta números</h1>
    
    <?php
    // Inicializamos variables para almacenar los datos y la cuenta.
    $total = 0;
    $contador = 1;

    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Utilizamos un bucle while para pedir 4 datos.
        while ($contador <= 4) {
            $numero = $_POST["dato$contador"];
            if ( is_numeric($numero) ){
                $total++;
            }
            $contador++;
        }
        
        // Mostramos el resultado.
        echo "<p>En total hay: $total números</p>";
    }
    ?>
    
    <form method="POST" action="">
        <?php
        // Utilizamos un bucle while para crear los campos de entrada.
        $contador = 1;
        while ($contador <= 4) {
            echo "<label for='dato$contador'>Dato $contador:</label>";
            echo "<input type='text' id='dato$contador' name='dato$contador' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Calcular cuántos números">
    </form>
</body>
</html>