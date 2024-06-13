<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];

            //Comprobamos que el número es mayor que 1
            if ($num > 1){ 
                $paso = $num;

                do {
                    echo "$paso - ";
                    if ($paso%2 == 0){
                        $paso = $paso / 2;
                    } else {
                        $paso = ($paso * 3) + 1;
                    }
                } while ($paso >1);
                echo "1";
            } else {
                echo "</br>Tienes que introducir un número mayor que 1</br>";
            }
            
         }
        
        
    ?>
    </br>
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>