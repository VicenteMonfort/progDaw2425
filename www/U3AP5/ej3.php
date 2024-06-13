<!DOCTYPE html>
<html>
<head>
    <title>Cálculo viaje</title>
</head>
<body>
    <h1>Viaje fin de curso</h1>
    
    <?php
   
   $tarifa0 = 4000;
   $tarifa1 = 95;
   $tarifa2 = 70;
   $tarifa3 = 65;
   $numViajeros1 = 30;
   $numViajeros2 = 50;
   $numViajeros3 = 100;
 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numAlumnos = $_POST["viajeros"];
        if ($numAlumnos < $numViajeros1) {
            $precioAlumno = $tarifa0 / $numAlumnos;
        } elseif ($numAlumnos < $numViajeros2) {
            $precioAlumno = $tarifa1;
        } elseif ($numAlumnos < $numViajeros3) {
            $precioAlumno = $tarifa2;
        } else {
            $precioAlumno = $tarifa3;
        }

        $precio = ($precioAlumno * $numAlumnos);
   
        echo "El pago a la compañía de transporte será $precio €\n";
        echo "El pago que realiza cada alumno será $precioAlumno €\n";    
   }
   
   
        
    ?>
    
    <form method="POST" action="">
        <label for="viajeros">Viajeros:</label>
        <input type="number" id="viajeros" name="viajeros" value="">
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>