<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}

session_unset(); 
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Borrar Ticket</title>
</head>
<body>
    <h3>El ticket ha sido borrado</h3>
    <a href="index.php">Hacer ticket nuevo</a>
</body>
</html>