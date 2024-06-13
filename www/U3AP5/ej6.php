<!DOCTYPE html>
<html>
<head>
    <title>Ahorros</title>
</head>
<body>
    <h1>Ahorros</h1>
    
    <?php
    /*En este ejercicio no mostramos los acumulados en cada mes.
    Para hacer eso necesitaríamos variables de sesión*/
    
    // Inicializamos variables para almacenar los datos y la cuenta.
    $total = 0;
    $contador = 1;

    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Utilizamos un bucle while para pedir 12 datos (meses).
        while ($contador <= 12) {
            $numero = $_POST["mes$contador"];
            if ( is_numeric($numero) ){
                $total+=$numero;
            }
            $contador++;
        }
        
        // Mostramos el resultado.
        echo "<p>En total has ahorrado: $total €</p>";
    }
    ?>
    
    <form method="POST" action="">
        <?php
        // Utilizamos un bucle while para crear los campos de entrada.
        $contador = 1;
        while ($contador <= 12) {
            echo "<label for='mes$contador'>Mes $contador:</label>";
            echo "<input type='text' id='mes$contador' name='mes$contador' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Calcular cuánto has ahorrado">
    </form>
</body>
</html>