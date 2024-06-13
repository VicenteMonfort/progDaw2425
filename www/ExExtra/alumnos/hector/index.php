<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bar de Javi - Comandas</title>
</head>
<body>
    <h1>Bar de Javi - Comandas</h1>
    <h2>Productos</h2>
    <ul>
        <li>
            Producto 1 - $10
            <a href="add.php?product=Producto%201&price=10">Agregar al ticket</a>
        </li>
        <li>
            Producto 2 - $15
            <a href="add.php?product=Producto%202&price=15">Agregar al ticket</a>
        </li>
        <li>
            Producto 3 - $20
            <a href="add.php?product=Producto%203&price=20">Agregar al ticket</a>
        </li>
        <li>
            Producto 4 - $25
            <a href="add.php?product=Producto%204&price=25">Agregar al ticket</a>
        </li>
    </ul>
    <br>
    <a href="ticket.php">Ver Ticket</a>
    <a href="delete.php">Borrar Ticket</a>
</body>
</html>
