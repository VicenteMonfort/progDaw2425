<?php 
session_start(); 
$var = $_POST['var'];
if($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST['var'])) {
    $_SESSION['array'] = $_POST['nombre']; 
    header('Location: Ticket.php'); 
    exit();








}




?>