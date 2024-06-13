<?php

$jugador1 = [];
$jugador2 = [];
$gana1 = 0;
$gana2 = 0;
$contador = 0;
define("TIRADAS", 5);

// Almacenando tiradas.
while ($contador < TIRADAS) {
    $dado1 = random_int(1,6); 
    $dado2 = random_int(1,6);
    $jugador1[$contador] = $dado1; 
    $jugador2[$contador] = $dado2;
    $contador++;
}

// Comparando.
$contador = 0;
while ($contador < 5) {
    if ($jugador1[$contador] < $jugador2[$contador]) {
        $gana2++;
    } elseif ($jugador1[$contador] > $jugador2[$contador]){
        $gana1++;
    } 
    $contador++;
}

echo "Jugador 1 gana $gana1 partidas, <br>";
echo "Jugador 2 gana $gana2 partidas, <br>";
echo "Han empatado ", TIRADAS - ($gana1 + $gana2); 

?>