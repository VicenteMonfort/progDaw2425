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
echo "<h1>Numeros Primo</h1>";
echo "<h5>100 primeros numeros primos</h5>";
while ($contadorPrimos < 100) {
    if (esPrimo($numero)) {
        echo $numero . "\n";
        $contadorPrimos++;
    }
    $numero++;
}
?>
