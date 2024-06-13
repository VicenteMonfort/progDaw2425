<?php
$resultado = [];
$cont = 0;

while ($cont < 6){
    $num = dameNumero($valor1, $valor2);
    if (!in_array($num, $resultado)){
        array_push($resultado, $num);
        $cont++;
    }
}
echo implode($resultado);

function dameNumero($n1, $n2){
    return random_int($n1, $n2);
}
?>