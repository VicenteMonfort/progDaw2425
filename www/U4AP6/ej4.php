<!DOCTYPE html>
<html>
<head>
    <title>DNI</title>
</head>
<body>
    <h1>Cálculo de letra de DNI</h1>
    
    <form method="POST" action="">
        <label for="dni">Introduce el número de DNI:</label>
        <input type="number" id="dni" name="dni">
        <input type="submit" value="Calcular">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dni = $_POST["dni"];
        $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
        $pos = $dni % 23;

        $letra = $letras[$pos];

        echo "</br>La letra correspondiente al dni $dni es: $letra";
        
    }
?>
       


</body>
</html>