<?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$bidi = [[],[]];

$pospar = 0;
$posimpar = 0;

foreach ($paroimpar as $elem){
    if ($elem % 2 == 0){
        $bidi[0][$pospar] = $elem;       
        $pospar++;
        //array_push($bidi[0], $elem); esto sustituye a las 2 anteriores
            
    } else {
        $bidi[1][$posimpar] = $elem;
        $posimpar++;
        //array_push($bidi[0], $elem); esto sustituye a las 2 anteriores
    }
    
}

echo "Array par del array: ";
echo implode("-", $bidi[0]);
echo "<br>";

echo "Array par del array: ";
echo implode("-", $bidi[1]);
echo "<br>";
    




?>