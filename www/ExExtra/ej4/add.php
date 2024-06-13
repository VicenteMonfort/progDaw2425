<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];

    if (!isset($_SESSION['ticket'])) {
        $_SESSION['ticket'] = [];
    }

    $_SESSION['ticket'][] = ['product' => $product, 'price' => $price];
}

header('Location: ticket.php');
exit;
?>
