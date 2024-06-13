<!DOCTYPE html>
<html>
<head>
    <title>Garra Phone</title>
</head>
<body>
    <h1>GARRA PHONE</h1>
    
    <?php
   
    $franja1 = 1;
    $minutosFranja1 = 5;
    $franja2 = 0.8;
    $minutosFranja2 = 3;
    $franja3 = 0.7;
    $minutosFranja3 = 2;
    $franja4 = 0.5;
 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $minutos = $_POST['minutos'];
        $domingo = $_POST['domingo'];
        
        if ($minutos <= $minutosFranja1) {
            $precio = $franja1 * $minutos;
        } elseif ($minutos <= ($minutosFranja1 + $minutosFranja2)) {
            $precio = $franja1 * $minutosFranja1 + ($minutos - $minutosFranja1) * $franja2;
        } elseif ($minutos <= ($minutosFranja1 + $minutosFranja2 + $minutosFranja3)) {
            $precio = $franja1 * $minutosFranja1 + $minutosFranja2 * $franja2 + ($minutos - $minutosFranja1 - $minutosFranja2) * $franja3;
        } else {
            $precio = $franja1 * $minutosFranja1 + $minutosFranja2 * $franja2 + $minutosFranja3 * $franja3 + ($minutos - $minutosFranja1 - $minutosFranja2 - $minutosFranja3) * $franja4;
        }
        
        
        if ($domingo == "S" || $domingo == "s") {
            $precio *= 1.03;
        } else {
            $franjaHoraria = readline("En qué franja horaria [M/T]? ");
            if ($franjaHoraria == "T" || $franjaHoraria == "t") {
                $precio *= 1.1;
            } else {
                $precio *= 1.15;
            }
        }
        
        echo "El cliente paga $precio € por $minutos minutos de llamada\n";
    
   }
   
   
   
        
        
    ?>
    
    <form method="POST" action="">
        <label for="minutos">Minutos:</label>
        <input type="number" id="minutos" name="minutos" value="">
        <label for="domingo">Es domingo? (Y/N):</label>
        <input type="text" id="domingo" name="domingo" value="">
            
        <input type="submit" value="Calcular">
    </form>
</body>
</html>