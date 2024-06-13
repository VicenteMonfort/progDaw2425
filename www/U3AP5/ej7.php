<?php
/*Hacemos el ejercicio con sesiones para poder
almacenar en las variables cada vez que introcuzcamos
un número*/

// Levantamos una sesión
session_start();


// Inicializamos variables si no existen
if (!isset($_SESSION['veces'])) {
    $_SESSION['mayor'] = 0;
    $_SESSION['menor'] = 0;
    $_SESSION['igual'] = 0;
} 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST["numero"];
    if (is_numeric($numero) == false) {
        echo "Nºs mayores que 0-->" . $_SESSION['mayor'] . "</br>";
        $_SESSION['mayor'] = 0;
        echo "Nºs menores que 0-->" . $_SESSION['menor'] . "</br>";
        $_SESSION['menor'] = 0;
        echo "Nºs iguales que 0-->" . $_SESSION['igual'] . "</br>";
        $_SESSION['igual'] = 0;
    }
    elseif ($numero == 0) {
    $_SESSION['igual']++;
    } elseif ($numero > 0){
    $_SESSION['mayor']++;
    } else{
    $_SESSION['menor']++;
    }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comparacion 0</title>
</head>
<body>
<h1>NÚMEROS =, > Y < A 0</h1>
<h2>Introduce números y pulsa una letra para salir</h2>
<form method="post" action="">
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required><br>

        <input type="submit" value="Prueba">
    </form>
</body>
</html>
