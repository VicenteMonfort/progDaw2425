<?php 
/*
El bar de Javi nos ha pedido una aplicación para que los camareros tomen notas 
de las comandas. 
En la aplicación al camarero le va a salir el resultado de ejecutar el código 
index.php. 
De momento hay 4 productos y no queremos introducir más. 

La idea es que al darle a Agregar al ticket de cada producto se vaya agregando y 
vaya calculando el total. Habrá un enlace para volver a introducir productos en la 
comanda (Continuar comprando).

Además habrá un Borrar Ticket, de tal manera que se elimine ese ticket y  
podamos hacer nuevos. 
A parte del index.php proporcionado tendrás que realizar: 
-(1,5 puntos) ticket.php: donde podamos ver el ticket  y hacer la lógica del mismo. 
-(1,5 puntos) add.php: donde vamos a ir acumulando los productos. en una 
variable de sesión. Esta será un array. Al final de este script redirigiremos a 
ticket.php para ver el resultado. 
-(0,5 puntos) delete.php: donde eliminaremos el ticket (las variables de sesión, la 
sesión, etc.) y redirigiremos al index.php




*/

session_start();
if($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre']; 
    header('Location: Ticket.php'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
</head>
    <body>
        <h2>Iniciar Sesion</h2>
        <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
            <button type="submit">añadir</button>
        </form>
    </body>
</html>

