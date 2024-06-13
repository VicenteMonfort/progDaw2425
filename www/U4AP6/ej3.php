<!DOCTYPE html>
<html>
<head>
    <title>Primos</title>
</head>
<body>
    <h1>Número primos en un array</h1>
    
    <form method="POST" action="">
        <label for="tamano">Introduce el tamaño del array de números primos:</label>
        <input type="number" id="tam" name="tam">
        <input type="submit" value="Calcular">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total = 1; //total de número primos e índice del array
        $tam = $_POST["tam"]; //tamaño del array
        $num = 2; //número a comprobar si es primo
        $divisor = $num; //la utilizo para ir diviendo el num por los números menores que él
        $ceros = 0; //almaceno cuántos restos han dado 0
        $primos = []; //array de números primos
        $primos[0] = 1;
        //bucle que controla el tamaño del array
        while ($total < $tam){
            //bucle que controla las divisiones de cada número a comprobar
            while ($divisor >= 1){
                $resto = $num % $divisor;
                if ($resto == 0){
                    $ceros++;
                }
                $divisor --;
            }
            if ($ceros == 2){
                $primos[$total] = $num;
                $total++;
            }
            $num++;
            $ceros = 0;
            $divisor = $num;

        }
        var_dump($primos);
        
    }
?>
       


</body>
</html>