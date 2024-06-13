<?php
session_start(); // Iniciar la sesión


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
