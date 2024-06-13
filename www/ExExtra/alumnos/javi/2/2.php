<!DOCTYPE html>
<html>
<head>
    <title>Numeros Primos</title>
</head>
<body>
    <h1>Pon tu numero primo</h1>

<?php

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$contadorPrimos = 0;
$numero = 2;

while ($contadorPrimos < 100) {
    if (esPrimo($numero)) {
        $contadorPrimos++;
    }
    $numero++;
}


?>

<form method="POST" action="">
        <label for="guess">Introduce un número:</label>
        <input type="text" id="guess" name="guess" value="<?php echo $guess; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>