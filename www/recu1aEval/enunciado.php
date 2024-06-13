
<html>
<head>
    <title>ex1aRecu</title>
</head>
<body>
    <h1>Examen 1a Evaluación RECUPERACIÓN</h1>
</body>
</html>
    
<?php    
    
    $horas=generarArray(); //llamo a la función generarArray, me devuelve un array y me lo guardo en $horas
    $horasMejorado=mejorarArray($horas); //le paso un array, me deuelve otro sin 0s repetidos y me lo guardo en $horasMejorado
    dibujaArray($horasMejorado); //dibujo el array. Si no consigues hacer $horasMejorado, pásale por parámetro el array $horas
    $semana=masHoras($horasMejorado); //me devuelve la semana que he estudiado más horas. Si no haces $horasMejorado hazlo con $horas
   
    
    
    //FUNCIONES

    function generarArray(): array{
       
        
    }
    
    function mejorarArray($num): array{
        
       
        
    }

    function dibujaArray($num){
        
    }

    function masHoras($num): int{

        
    }
?>