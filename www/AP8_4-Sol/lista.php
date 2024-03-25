<?php
require_once("autoloader.php");
$lista = new Modelo();
$lista->init("tareas.csv");
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
            <th>ID</th>
            <th><?=$lista->showOrderAction("titulo","título") ?></th>
            <th><?=$lista->showOrderAction("fecha_vencimiento","Vencimiento") ?></th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td><a href="nueva.php">Añadir</a></td>
            <td colspan="4"><?=$lista->showNavigator() ?></td>
        </tr>
    </tfoot>
    <tbody>
        <?= $lista->showAllTasks() ?>
    </tbody>
</table>

</body>
</html>
