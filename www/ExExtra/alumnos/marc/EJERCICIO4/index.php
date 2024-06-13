<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pedir productos</title>
</head>
<body>
    <h1>Pedir productos</h1>
    <h2>Productos</h2>
    <ul>
        <li>
            Cerveza - $2.50
            <form action="añadir.php" method="post">
                <input type="hidden" name="product" value="Cerveza">
                <input type="hidden" name="price" value="2.50">
                <input type="submit" value="Agregar al ticket">
            </form>
        </li>
        <li>
            Agua - $2.00
            <form action="añadir.php" method="post">
                <input type="hidden" name="product" value="Agua">
                <input type="hidden" name="price" value="2.00">
                <input type="submit" value="Agregar al ticket">
            </form>
        </li>
        <li>
            Hamburguesa - $12.00
            <form action="añadir.php" method="post">
                <input type="hidden" name="product" value="Hamburguesa">
                <input type="hidden" name="price" value="12.00">
                <input type="submit" value="Agregar al ticket">
            </form>
        </li>
        <li>
            Ensalada - $10.00
            <form action="añadir.php" method="post">
                <input type="hidden" name="product" value="Ensalada">
                <input type="hidden" name="price" value="8.00">
                <input type="submit" value="Agregar al ticket">
            </form>
        </li>
    </ul>
    <a href="ticket.php">Ver ticket</a> </br>
    <a href="delete.php">Borrar Ticket</a>
</body>
</html>
