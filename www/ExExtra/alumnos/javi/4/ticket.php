<?php
session_start();

if (!isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = array();
}

$ticket = $_SESSION['ticket'];

$total = 0;
$producto1 = 2;
$producto2 = 2;
$producto3 = 12;
$producto4 = 10;

switch ($total) {
    case 'Cerveza':
        $total + 2;
        break;
    case 'Agua':
        $total + 2;
        break;
    case 'Hamburguesa':
        $total + 12;
        break;
    case 'Ensalada':
        $total + 10;
        break;
    default:  
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ticket del Sanjuan</title>
</head>
<body>
    <h1>Ticket</h1>
    <ul>
        <?php
         foreach ($ticket as $item): 
             echo $item['producto'] . $item['precio']; 
             $total = ['precio']; 
         endforeach;
         ?>
    </ul>
    <h3>Total: $<?php echo $total; ?></h3>
    <br>
    <a href="index.php">Continuar comprando</a>
    <a href="delete.php">Borrar Ticket</a>
</body>
</html>
