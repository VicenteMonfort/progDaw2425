<!DOCTYPE html>
<html>
<head>
    <title>sueldo</title>
</head>
<body>
    <h1>Cálculo sueldo semanal</h1>
    
    <?php
   
    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $diasLaborables = $_POST['dias'];
        $horasTrabajadas = $_POST['horas'];
        $precioHora = $_POST['precio'];

        $sueldoSemanal = $horasTrabajadas * $precioHora * $diasLaborables;
        
        echo "El trabajador debe percibir $sueldoSemanal €\npor $horasTrabajadas horas trabajadas esta semana.\n";

    }
        
        
    ?>
    
    <form method="POST" action="">
        <label for="dias">Introduce los días trabajados:</label>
        <input type="number" id="dias" name="dias" value="">
        <label for="horas">Introduce las horas diarias trabajadas:</label>
        <input type="number" id="horas" name="horas" value="">
        <label for="dias">Introduce el precio por hora:</label>
        <input type="number" id="precio" name="precio" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>