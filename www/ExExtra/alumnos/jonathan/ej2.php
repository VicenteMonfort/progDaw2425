<?php 
/*
EJERCICIO 2:
ÇRealiza un script para imprimir los 100 primeros números primos. Un 
número primo es aquel que es divisible por él mismo y la unidad. Para realizar 
correctamente este script, deberá llamar a una función a la cual le pasemos por 
parámetro un número y nos devolverá true o false dependiendo de si es primo o 
no.
*/
echo "Ejercicio 2: <br>";
echo "-------------------------------<br>";

$contador = 0;
$numero = 1;
function primo(){
while ($contador < 100){
    $esPrimo = true;
    for ($i = 2; $i < $numero; $i++){
        if ($numero % $i == 0){
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo){
        echo $numero . " , ";
        $contador++;
    }
    $numero++;
}
        $contador++;
return $numero;
        }

$llamada = primo(); 
    echo $llamada; 
      















?>