<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product']) && isset($_POST['price'])) {
    $_SESSION['product'] = $_POST['product'];
    $_SESSION['price'] = $_POST['price'];
}
$product = $_SESSION['product'];
$price = $_SESSION['price'];

?>
<html>
    <body>
        <a href="ticket.php">Ticket</a>
    </body>
</html>