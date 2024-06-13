<?php

function esPrimo ($num) {
    $div = 0;
    for ($i=$num;$i>0;$i--){
        if ($num%$i==0) $div++;
    }
    $es = ($div>2) ?  false :  true;
    return $es;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>100 PRIMEROS PRIMOS</title>
</head>
<body>
    <h2>100 PRIMEROS PRIMOS</h2>
    <p>Hola, ahí van los 100 primeros primos
        <?php
        $cont=0;
        $num=2;
        while ($cont<100){
            if (esPrimo($num)){
                echo "$num-";
                $cont++;
            }
            $num++;
        }