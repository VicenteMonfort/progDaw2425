<!DOCTYPE html>
<html>
<head>
    <title>Cálculo precio comensales</title>
</head>
<body>
    <h1>Cálculo precio comensales</h1>
    
    <?php
   
    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $personas = $_POST["personas"];       
        if ($personas > 300) {
            $platoPersona = 75;
        } elseif ($personas > 200) {
            $platoPersona = 85;
        } else {
            $platoPersona = 95;
        }
        
        echo " el presupuesto para $personas es " . ($personas * $platoPersona) . "\n";
        
    }
        
        
    ?>
    
    <form method="POST" action="">
        <label for="personas">Introduce un número de comensales:</label>
        <input type="number" id="personas" name="personas" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>