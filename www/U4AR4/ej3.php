<?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$par = [];
$impar = [];
$pospar = 0;
$posimpar = 0;

//Solución con foreach
foreach ($paroimpar as $elem){
    if ($elem % 2 == 0){
            $par[$pospar] = $elem;
            $pospar++;
            //array_push($par, $elem); esta instrucción sustituye a las 2 anteriores
    } else {
        $impar[$posimpar] = $elem;
        $posimpar++;
            //array_push($impar, $elem); esta instrucción sustituye a las 2 anteriores

    }
}
/*Solución con while
$i = 0;
while ($i < $tam){
    if ($paroimpar[$i] % 2 == 0){
        echo "$paroimpar[$i] es par <br>";
    } else {
        echo "$paroimpar[$i] es impar <br>";
    }
    $i++;
}*/

/*Solución con for
for ($i = 0; $i < $tam; $i++){
    if ($paroimpar[$i] % 2 == 0){
            echo "$paroimpar[$i] es par <br>";
    } else {
            echo "$paroimpar[$i] es impar <br>";
    }
}*/
echo "El array original: ";
implode("-", $paroimpar);
echo "<br>";
echo "El array de pares: ";
implode("-", $par);
echo "<br>";
echo "El array de impares: ";
implode("-", $impar);
echo "<br>";

?>