<?php
session_start(); 


if (!isset($_SESSION['nombre'])) {
    header('Location: login.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <p>Hola, <?php echo $_SESSION['nombre']; ?> . ¡Bienvenido!</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>