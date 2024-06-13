<?php
// Levantamos una sesión
session_start();


// Inicializamos los intentos si no existe
if (!isset($_SESSION['veces'])) {
    $_SESSION['veces'] = 0;
    $_SESSION['adivina'] = random_int(1, 100);
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST["numero"];
    if ($numero == $_SESSION['adivina']) {
        echo "Número adivinado! en " . $_SESSION['veces'];
        $_SESSION['veces'] = 0;
        $_SESSION['adivina'] = random_int(1, 100);
    } else {
        $_SESSION['veces']++;
        if ($_SESSION['adivina'] < $numero){
            echo "Buscamos un número MENOR. Intentos: " . $_SESSION['veces'];
        } else {
            echo "Buscamos un número MAYOR. Intentos: " . $_SESSION['veces'];
        }
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adivina el número</title>
</head>
<body>
<form method="post" action="">
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required><br>

        <input type="submit" value="Prueba">
    </form>
</body>
</html>
