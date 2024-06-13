<!DOCTYPE html>
<html>
<head>
    <title>Ej1</title>
</head>
<body>
    <h1>Ej1</h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $numero = $_POST["n"];


    $numeroRomano = numRomano($numero);
    $numeroRomano = $numeroRomano == "" ? "desconocido" : "$numeroRomano";

    echo "Su equivalente en número romano es: $numeroRomano\n";
}
function numRomano(int $numero): string
{
    switch ($numero) {
        case 1:
            $romanoResultado = "I";
            break;
        case 2:
            $romanoResultado = "II";
            break;
        case 3:
            $romanoResultado = "III";
            break;
        case 4:
            $romanoResultado = "IV";
            break;
        case 5:
            $romanoResultado = "V";
            break;
        case 6:
            $romanoResultado = "VI";
            break;
        case 7:
            $romanoResultado = "VII";
            break;
        case 8:
            $romanoResultado = "VIII";
            break;
        case 9:
            $romanoResultado = "IX";
            break;
        case 10:
            $romanoResultado = "X";
            break;
        default:
            $romanoResultado = "";
            break;
    }
    return $romanoResultado;
}
?>

<form method="POST" action="">
    <label for="n">Número del 1 al 10: </label>
    <input type="number" id="n" name="n">
    <input type="submit" value="Calcular">
</form>
</body>
</html>
