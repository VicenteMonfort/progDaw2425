<?php
require_once "autoloader.php";
$lista = new Modelo();
$tarea = $lista->getTask(isset($_GET["id"]) ? $_GET["id"] : null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<table class="greenTable">
    <thead>
        <tr>
            <th><?= $tarea["titulo"]?></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td>La tarea <?=$tarea["id"]?> vence en <?=$tarea["fecha_vencimiento"]?></td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>fecha de creación: <?=$tarea["fecha_creacion"]?></td>
        </tr>
        <tr>
            <td>descripción: <?=$tarea["descripcion"]?></td>
        </tr>
    </tbody>
</table>
<a href="lista.php">Volver</a>
</body>
</html>
