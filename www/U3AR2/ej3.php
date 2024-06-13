<!DOCTYPE html>
<html>
<head>
    <title>Suma números impares</title>
</head>
<body>
    <h1>Suma de números impares</h1>
    
    <?php
    // Inicializamos variables para almacenar los datos y la suma.
    $suma = 0;
    $cont = 0;
    $valor1 = 0;
    $valor2 =0;
    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['l1'];
        $valor2 = $_POST['l2'];

        //compruebo si valor 1 es par o impar
        if ($valor1 % 2 == 0){
            $valor1++;
        }

        //idem con valor 2
        if ($valor2 % 2 == 0){
            $valor2--;
        }
        
        $cont = $valor1;
        while ($cont <= $valor2) {
            $suma += $cont;
            $cont += 2;            
        }
        
        // Mostramos el resultado.
        echo "<p>La suma de los impares comprendidos es: $suma</p>";
    }
    ?>
<form method="post" action="">
        <label for="numero">Número inferior:</label>
        <input type="text" id="l1" name="l1" required><br>
        <label for="numero">Número superior:</label>
        <input type="text" id="l2" name="l2" required><br>

        <input type="submit" value="Suma">
    </form>
</body>
</html>