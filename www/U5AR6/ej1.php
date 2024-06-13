<!DOCTYPE html>
<html>
<head>
    <title>Ej1</title>
</head>
<body>
    <h1>Ej1</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $gana = $_POST["gana"];
    $empata = $_POST["empata"];
    $pierde = $_POST["pierde"];

    $resultado = calculaPuntos($gana, $empata, $pierde);
    echo "El equipo obtiene: " . $resultado['puntos'] . " puntos (" . $resultado['porcentaje'] . "<br>";    

}



function calculaPuntos(int $ganados, int $perdidos, int $empatados): array
{
    $resultado = [
        'puntos' => $ganados * 3 + $empatados,
        'porcentaje' => round(100*($ganados * 3 + $empatados) / (3 * ($ganados + $perdidos + $empatados)),2)
    ];
    return $resultado;
}

?>

<form method="POST" action="">
    <label for="gana">Partidos ganados: </label>
    <input type="number" id="gana" name="gana">
    <label for="empata">Partidos empatados: </label>
    <input type="number" id="empata" name="empata">
    <label for="pierde">Partidos perdidos: </label>
    <input type="number" id="pierde" name="pierde">
    <input type="submit" value="Calcular">
</form>
</body>
</html>