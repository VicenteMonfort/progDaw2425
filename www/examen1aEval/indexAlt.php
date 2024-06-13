<!DOCTYPE html>
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
    $combinaciones=array();
    $tablero=array();
    $fichaObjetivo=0;
    $robot=0;
    
    //posibles combinaciones mezclando los dos arrays
    $combinaciones=generarCombinaciones($numeros,$colores);

    //generación del tablero (combinaciones desordenadas)
    $tablero=$combinaciones;
    shuffle($tablero);

    //posiciones ficha objetivo y robot
    while ($fichaObjetivo==$robot){
        $fichaObjetivo=rand(1,36);
        $robot=rand(1,36);
    }
    dibujarTablero($tablero, 6, 6);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $filaI = $_POST["filaI"];
        $colI = $_POST["colI"];
        $filaF = $_POST["filaF"];
        $colF = $_POST["colF"]; 
        $ini=traducirTirada($filaI,$colI);
        $fin=traducirTirada($filaF,$colF);
        if (tiradaValida($tablero,$ini,$fin)){
            echo "La tirada es válida";
        }else{
            echo "La tirada NO es válida";
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

    function dibujarTablero($arrayTablero,$filas,$columnas){
        for ($i=1;$i<=count($arrayTablero);$i++){
            $resto=$i%$filas;
            if ($resto==0){
                echo implode("-",$arrayTablero[$i-1]) . " ";
                //print_r($arrayTablero[$i-1]);
                echo "<br>";
            }else{
                echo implode("-",$arrayTablero[$i-1]) . " ";
                //print_r($arrayTablero[$i-1]);
            }
            
        }
    }
   
    function traducirTirada($fila,$columna): int{
        return ($fila*6+$columna-1)-6;
    }

    function tiradaValida($tablero,$posOrigen,$posDestino): bool{
        if ($tablero[$posOrigen][0]==$tablero[$posDestino][0] || $tablero[$posOrigen][1]==$tablero[$posDestino][1]){
            return true;
        }else{
            return false;
        }
    }
  
    
