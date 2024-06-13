



<?php

$meteorologicalData = [
    [
        'station' => 'Catarroja',
        'temperature' => 15,
        'humidity' => 85,
        'atmosphericPressure' => 1024
    ],
    [
        'station' => 'Alzira',
        'temperature' => 35,
        'humidity' => 75,
        'atmosphericPressure' => 1000
    ],
    [
        'station' => 'Almussafes',
        'temperature' => 17,
        'humidity' => 95,
        'atmosphericPressure' => 950
    ],
    [
        'station' => 'Carlet',
        'temperature' => 31,
        'humidity' => 55,
        'atmosphericPressure' => 850
    ]
];


function show(array $data)
{
    
    foreach ($data as $key => $station) {
        echo "[$key] " . $station['station'] . ": " . $station['temperature'] . "ºC, " . $station['humidity'] . "% de humedad y " . $station['atmosphericPressure'] . " <br>";
    }
}

function fixPressure(array $data, int $stationId): array
{
    $data[$stationId]['atmosphericPressure'] = ($data[$stationId]['temperature'] < 30) ?
        $data[$stationId]['atmosphericPressure'] / 0.85 :
        $data[$stationId]['atmosphericPressure'] / 0.75;
    $data[$stationId]['atmosphericPressure'] = round($data[$stationId]['atmosphericPressure'], 2);
    return $data;
}

function averageTemperature(array $data): float
{
    $temperatureSum = 0;
    foreach ($data as $station) {
        $temperatureSum += $station['temperature'];
    }
    return round($temperatureSum / count($data), 2);
}


show($meteorologicalData);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $estacion = $_POST["estacion"];
    $meteorologicalData=fixPressure($meteorologicalData, $estacion);
    echo "<br>";
    show($meteorologicalData);
    echo "La media de temperaturas es: " . averageTemperature($meteorologicalData);

   
}
?>

<form method="POST" action="">
    <label for="estacion">Estación erronea: </label>
    <input type="number" id="estacion" name="estacion">
    <input type="submit" value="Recalcular">
</form>
</body>
</html>