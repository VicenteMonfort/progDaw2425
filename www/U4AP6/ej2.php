<!DOCTYPE html>
<html>
<head>
    <title>Multipl</title>
</head>
<body>
    <h1>Multiplicación elemento a elemento 2 arrays</h1>
    
    
    <?php

    $arr1 = [];
    $arr2 = [];
    $elements = 5;
    $index = 0;

    do {
        $arr1[$index] = random_int(1,10);
        $arr2[$index] = random_int(1,10);
        $index++;
    } while ($index < $elements);




    if (count($arr1) == count($arr2)) {
        $index = 0;
        do {
            $mult = $arr1[$index] * $arr2[$index];
            echo "Multitplicación elementos $index: $mult ($arr1[$index] * $arr2[$index])</br>";
            $index++;
        }   while ($index < $elements);
    } else {
        echo "Arrays con diferente longitud!!!";
    }
    ?>

</body>
</html>