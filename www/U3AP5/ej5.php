<!DOCTYPE html>
<html>
<head>
    <title>AUTOBÚS</title>
</head>
<body>
    <h1>AUTOBÚS</h1>
    
    <?php
   
   $numMinPersonas = 20;
   $paxAutobusA = 2;
   $paxAutobusB = 2.5;
   $paxAutobusC = 3;

 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $autobus = $_POST['autobus'];
        $km = $_POST['km'];
        $personas = $_POST['personas'];

        if ($autobus == "A" || $autobus == "a") {
            $pax = $paxAutobusA;
        } elseif ($autobus == "B" || $autobus == "b") {
            $pax = $paxAutobusB;
        } elseif ($autobus == "C" || $autobus == "c") {
            $pax = $paxAutobusC;
        }
        //Con switch
        /*
        switch ($autobus) {
            case "a":
            case "A":
                $pax = $paxAutobusA;
                break;
            case "b":
            case "B":
                $pax = $paxAutobusB;
                break;
            case "c":
            case "C":
                $pax = $paxAutobusC;
                break;
        }
        */
        if ($personas < $numMinPersonas) {
            $personasAPagar = $numMinPersonas;
        } else {
            $personasAPagar = $personas;
        }
        //Con operador ternario
        //$personasAPagar = ($personas < $numMinPersonas) ? $numMinPersonas : $personas;
        
        $precioTotal = $personasAPagar * $pax * $km;
        $precioPersona = $precioTotal / $personas;

        echo "El precio total del viaje es $precioTotal €, y cada persona paga $precioPersona €\n";

   }

    ?>
    
    <form method="POST" action="">
        <label for="autobus">Autobús (A/B/C):</label>
        <input type="text" id="autobus" name="autobus" value="">
        <label for="km">Kilómetros:</label>
        <input type="number" id="km" name="km" value="">
        <label for="personas">Personas:</label>
        <input type="number" id="personas" name="personas" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>