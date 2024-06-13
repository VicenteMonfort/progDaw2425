<?php
/*Realiza un script para imprimir los 100 primeros números primos. Un
número primo es aquel que es divisible por él mismo y la unidad. Para realizar
correctamente este script, deberá llamar a una función a la cual le pasemos por
parámetro un número y nos devolverá true o false dependiendo de si es primo o
no.*/
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

$contador = 0;
$numero = 2;

while ($contador < 100) {
    if (esPrimo($numero)) {
        echo $numero . " ";
        $contador++;
    }
    $numero++;
}

?>