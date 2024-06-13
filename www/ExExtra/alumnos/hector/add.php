<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}

if (isset($_GET['product']) && isset($_GET['price'])) {
    $product = $_GET['product'];
    $price = (int)$_GET['price'];
    $_SESSION['ticket'][] = array('product' => $product, 'price' => $price);
}

header("Location: ticket.php");
exit;
