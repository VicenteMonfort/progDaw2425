<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}


    $product = $_POST['product'];
    $price = (int)$_POST['price'];
    $_SESSION['ticket'][] = array('product' => $product, 'price' => $price);

header("Location: ticket.php");
exit;
?>