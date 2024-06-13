<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>
<body>
    <h1>Cálculo serie de Fibonacci</h1>
    
    <?php
   
    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $elementos = $_POST['elementos'];
        $penultimo = 0;
        $ultimo = 1;
        echo "($penultimo,$ultimo";
        $elementos -= 2;
        while ($elementos-- > 0) { //el post-decremento hace el decremento despues de realizar la comparación
            $elementoNuevo = $ultimo + $penultimo;
            $penultimo = $ultimo;
            $ultimo = $elementoNuevo;
            echo "," . $elementoNuevo;
        }
        echo ")\n";
    }
        
        
    ?>
    
    <form method="POST" action="">
        <label for="Fibonacci">Introduce un número para la sucesión:</label>
        <input type="number" id="elementos" name="elementos" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>