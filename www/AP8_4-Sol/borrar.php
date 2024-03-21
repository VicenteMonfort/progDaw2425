<?php
require_once "autoloader.php";
$lista = new Modelo();
$tarea = $lista->deleteTask(isset($_GET["id"]) ? $_GET["id"] : null);
header("location: lista.php");
