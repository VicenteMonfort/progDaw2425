<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['product']) && !empty($_POST['price'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $_SESSION['ticket'][] = array('product' => $product, 'price' => $price);
}

header("Location: ticket.php");
exit;
