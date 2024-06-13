<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}

$ticket = $_SESSION['ticket'];
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bar de Javi - Ticket</title>
</head>
<body>
    <h1>Ticket</h1>
    <ul>
        <?php foreach ($ticket as $producto): ?>
            <li><?php echo $producto['product'] . " - €" . $producto['price']; ?></li>
            <?php $total += $producto['price']; ?>
        <?php endforeach; ?>
    </ul>
    <h3>Total: <?php echo $total; ?></h3>
    <br>
    <a href="index.php">Continuar comprando</a>
</body>
</html>


