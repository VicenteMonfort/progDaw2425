<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}

if (isset($_GET['producto']) && isset($_GET['precio'])) {
    $producto = $_GET['producto'];
    $precio = (int)$_GET['pricio'];
    $_SESSION['ticket'][] = array('producto' => $producto, 'precio' => $precio);
}

header("Location: ticket.php");
exit;
