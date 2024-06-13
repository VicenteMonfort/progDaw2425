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
        <?php foreach ($ticket as $ticket): ?>
            <li><?php echo $ticket['product'] . " - $" . $ticket['price']; ?></li>
            <?php $total += $ticket['price']; ?>
        <?php endforeach; ?>
       
    </ul>
    <h3>Total: $<?php echo $total; ?></h3>
    <?php if ($total >=26.5) {
            echo "<h5>No comas tanto gordito</h5>";
        }
        ?>
    <br>
    <a href="index.php">Continuar comprando</a>
    <a href="delete.php">Borrar Ticket</a>
</body>
</html>
