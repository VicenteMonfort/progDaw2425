<?php

function es_primo($numero) {
    if($numero <= 1) {
        return false;
    }else

    for ($i = 2;$i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
         return false;
        }
    }
    return true;
}



function cien_primeros($cantidad) {
    $primos = array();
    $num = 2;


    while(count($primos) < 100
    ) {
        if (es_primo($num)) {
            $primos[] = $num;
        }
        $num++;
    }
    return $primos;
}


$primos = cien_primeros(100);
foreach ($primos as $primo) {
    echo $primo .", ";
}
?>

