<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <form method="post" action="">
        <label for="numero">Fila inicio:</label>
        <input type="number" id="filaI" name="filaI" required><br>
        <label for="numero">Colummna inicio:</label>
        <input type="number" id="colI" name="colI" required><br>
        <label for="numero">Fila fin:</label>
        <input type="number" id="filaF" name="filaF" required><br>
        <label for="numero">Columna fin:</label>
        <input type="number" id="colF" name="colF" required><br>
        <input type="submit" value="Prueba">
    </form>
</body>
</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    $combinaciones=array(); //array bidimensional con todas las combinaciones (36x2)
    $tablero = generarTablero();

    $fichaObjetivo=0;
    $robot=0;  

    

    $_SESSION['tablero'] = $tablero;
  
    
    //posibles combinaciones mezclando los dos arrays
    $combinaciones=generarCombinaciones($numeros,$colores);
    //$tablero=generarTablero();
    dibujarTablero($_SESSION['tablero'], $combinaciones);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $filaI = $_POST["filaI"];
        $colI = $_POST["colI"];
        $filaF = $_POST["filaF"];
        $colF = $_POST["colF"]; 
        if ($filaI == $filaF || $colI == $colF){
            echo "<br>TIRADA PERMITIDA<br>";
            if (tiradaValida($_SESSION['tablero'], $combinaciones, $filaI, $colI, $filaF, $colF)){
                echo "Tirada válida";
            }else{
                echo "Tirada NO válida";
            }
        }else{
            echo "<br>TIRADA NO PERMITIDA<br>";
        }
        
    }
    
    
    
    //FUNCIONES

    function generarCombinaciones($array1,$array2): array{
        $pareja=array();
        $arrayResult=array();
        for ($i=0;$i<count($array1);$i++){
            for ($j=0;$j<count($array2);$j++){
                $pareja[0]=$array1[$i];
                $pareja[1]=$array2[$j];
                array_push($arrayResult,$pareja);
            }
        }
        return $arrayResult;
    }

    function generarTablero(): array{
        $nos=array();
        $tablero=array();
        //genero array de nos consecutivos
        for ($x=0;$x<36;$x++){
            $nos[$x]=$x;
        }
        for ($i=0;$i<6;$i++){
            for ($j=0;$j<6;$j++){
                $pos=rand(0,count($nos)-1);
                $nos=array_splice($nos,$pos,1);
                $tablero[$i][$j]=$pos;
            }
        }
        return $tablero;
    }
    
    

    function dibujarTablero($arrayTablero, $arrayCombinaciones){
        for ($i=0;$i<6;$i++){
            for ($j=0;$j<6;$j++){
                $indice=$arrayTablero[$i][$j];
                echo $arrayCombinaciones[$indice][0] . "-" . $arrayCombinaciones[$indice][1] . " ";
            }
            echo "<br>";
        }
    }
   

    function tiradaValida($arrayTablero, $arrayCombinaciones, $filaOrigen,$columnaOrigen, $filaDestino, $columnaDestino): bool{
        $origen=$arrayTablero[$filaOrigen-1][$columnaOrigen-1];
        $destino=$arrayTablero[$filaDestino-1][$columnaDestino-1];
        $numOrigen=$arrayCombinaciones[$origen][0];
        $colorOrigen=$arrayCombinaciones[$origen][1];
        $numDestino=$arrayCombinaciones[$destino][0];
        $colorDestino=$arrayCombinaciones[$destino][1];
        if ($numOrigen==$numDestino || $colorOrigen==$colorDestino){
            return true;
        }else{
            return false;
        }
    }
?>