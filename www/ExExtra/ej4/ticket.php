<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
</head>
<body>
    <h1>TICKET</h1>
    <?php
    $total = 0;
    if (!isset($_SESSION['ticket']) || empty($_SESSION['ticket'])) {
        echo "<p>El carrito está vacío.</p>";
    } else {
        echo "<ul>";
        foreach ($_SESSION['ticket'] as $item) {
            echo "<li>" . $item['product'] . " - $" . $item['price'] . "
            </li>";
            $total+=$item['price'];
        }
        echo "TOTAL: $total €";

        echo "</ul>";
    }
    ?>
    <a href="index.php">Continuar comprando</a>
</body>
</html>
