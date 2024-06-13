
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
    echo "<br> La semana que más estudias es la semana->" . $semana;
    
    
    //FUNCIONES

    function generarArray(): array{
        $arrayResult=array();
        for ($i=0;$i<50;$i++){
            $rand=rand(0,6);
            array_push($arrayResult,$rand);
        }
        return $arrayResult;
    }
    
    function mejorarArray($num): array{
        
        for ($i=0;$i<count($num)-1;$i++){
            if ($num[$i]==0 && $num[$i+1]==0){
                array_splice($num,$i,1);
            }
        }
        return $num; 
    }

    function dibujaArray($num){
        for ($i=0;$i<count($num);$i++){
            if ($num[$i]!=0){
                echo $num[$i] . " ";
            }else{
                echo "<br>";
            }
        } 
    }

    function masHoras($num): int{
        $sum=0;
        $max=0;
        $semana=1;
        $semanaMax=1;
        for ($i=0;$i<count($num)-1;$i++){
            if ($num[$i]!=0){//sigo en la misma semana
                $sum+=$num[$i];
            }else{//me he encontrado un 0, cambio de semana
                if ($sum>$max){//si esa semana tienes más horas de estudio
                    $max=$sum;
                    $semanaMax=$semana;
                }
                $sum=0;
                $semana++;
                

            }
        }
        return $semanaMax;
    }
?>