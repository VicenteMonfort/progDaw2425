?>
<!DOCTYPE html>
<html>
<head>
    <title>Ej1</title>
</head>
<body>
    <h1>Ej1</h1>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $h1 = $_POST["h1"];
    $h2 = $_POST["h2"];

    $diferencia = diferenciaEdades($h1, $h2);

    echo "la diferencia es $diferencia años\n";
}

function diferenciaEdades(int $ed1, int $ed2): int {
    $dif = 0;
    /* if ($ed1 > $ed2) { //opción alternativa
        $dif = ($ed1 - $ed2);
    } else {
        $dif = ($ed2 - $ed1);
    } */
    $dif = abs($ed1 - $ed2); 
    return $dif;
} 
?>

<form method="POST" action="">
    <label for="h1">Edad hermano 1: </label>
    <input type="number" id="h1" name="h1">
    <label for="h2">Edad hermano 2: </label>
    <input type="number" id="h2" name="h2">
    <input type="submit" value="Calcular">
</form>
</body>
</html>
