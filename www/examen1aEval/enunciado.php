<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
</body>
</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    /*usa esto si no los generas tú
    $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    $tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];*/
    
    $combinaciones=array();
    $tablero = generarTablero();
   
    if (!isset($_SESSION['tablero'])) {
        $_SESSION['tablero'] = $tablero;
    } 
    
    //posibles combinaciones mezclando los dos arrays
    $combinaciones=generarCombinaciones($numeros,$colores);
    dibujarTablero($_SESSION['tablero'], $combinaciones);

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       //comprueba si la tirada es permitida

       //si es permitida, comprueba si es válida
        if (tiradaValida($_SESSION['tablero'], $combinaciones, $filaI, $colI, $filaF, $colF)){
            echo "Tirada válida";
        }else{
            echo "Tirada NO válida";
        }
    }
    
    
    //FUNCIONES

    //desarrolla esta función si no usas la estructura dada $combinaciones
    function generarCombinaciones($array1,$array2): array{
        
    }
    
    function dibujarTablero($arrayTablero, $arrayCombinaciones){
        
    }
   
    function tiradaValida($arrayTablero, $arrayCombinaciones, $filaOrigen,$columnaOrigen, $filaDestino, $columnaDestino): bool{
        
    }

    //desarrolla esta función si no usas la estructura dada $tablero
    function generarTablero(): array{
        
    }
?>