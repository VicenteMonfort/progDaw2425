<?php
require_once "autoloader.php";
$datos = new Gestion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <?=$datos->getBrands()?><br>
    <input type="submit" value="Seleccionar">
    </form>
</body>
</html>