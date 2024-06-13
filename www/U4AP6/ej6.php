<?php
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$dias = [31,28,31,30,31,30,31,31,30,31,30,31];

$contador = 0;

while($contador < 10){
    $mes = random_int (0,11);
    $dia = random_int (1, $dias[$mes]);
    
    echo "fecha $contador ", $dia, $meses[$mes], "<br>";
    $contador ++;

}
?>