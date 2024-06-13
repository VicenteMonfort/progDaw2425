<!DOCTYPE html>
<html>
<head>
    <title>Vocal</title>
</head>
<body>
    <h1>Introduce hasta vocal</h1>

    <?php

    $guess = '';
    $message = '';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $guess = $_POST["guess"];

        
        if ($guess == "a" || $guess == "e" || $guess == "i" || $guess =="o" || $guess =="u") {
            $message = "Vocal introducida";
        } else {
            $message = "Prueba de nuevo";
        }
        
    }
    ?>

    <p><?php echo $message; ?></p>

    <form method="POST" action="">
        <label for="guess">Introduce un número:</label>
        <input type="text" id="guess" name="guess" value="<?php echo $guess; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
