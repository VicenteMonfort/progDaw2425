<!DOCTYPE html>
<html>
<head>
    <title>Primitiva</title>
</head>
<body>
    <h1>Genera un número de la Primitva</h1>

    <?php
    for ($i=1; $i<=6; $i++){
        $num = random_int(1, 49);
        echo "El número $i es: $num </br>"; 
    }
    ?>
    <h2>¡¡SUERTE!!</h2>
</body>
</html>
