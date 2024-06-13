
<!DOCTYPE html>
<html>
<head>
    <title>Pares</title>
</head>
<body>
<h1>NÚMEROS PARES ENTRE 0 Y 100</h1>

<?php

//Opción 1
/*$numero = 0;
while ($numero >= 0){
    echo $numero . "</br>";
    $numero+=2;
}*/

//Opción 2
for ($numero = 0; $numero <= 100; $numero++) {
    if ($numero % 2 == 0) {
        echo "$numero es par\n" . "</br>";
    }
}
?>
</body>
</html>
