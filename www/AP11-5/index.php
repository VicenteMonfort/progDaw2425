<?php

/* 1r PASO
require_once "class/MatrixOps.php";
require_once "class/Matrix.php";*/

/* 2o PASO DEPRECATED
function __autoload($claseDesconocida){
    require_once "class/{$claseDesconocida}.php";
}*/

/*3r PASO PROBLEMA REPETICIÓN
function miAutoloadUno($claseDesconocida){
    $fichero = "class1/{$claseDesconocida}.php";
    if(file_exists($fichero)){
        require_once $fichero;
    }
}
function miAutoloadDos($claseDesconocida){
    $fichero = "class2/{$claseDesconocida}.php";
    if(file_exists($fichero)){
        require_once $fichero;
    }
}
spl_autoload_register("miAutoloadUno");
spl_autoload_register("miAutoloadDos");*/

//4o PASO
require_once "autoloader.php";


//Creación de objetos
$matrix1 = new Matrix(2, 3);
$matrix1->setRandomValues(1, 5);
$matrix2 = new Matrix(2, 3);
$matrix2->setRandomValues(1, 5);
$ops = new MatrixOps($matrix1, $matrix2);

//Opeaciones sobre los objetos
$sumMatrix = $ops->sumMatrix();
$sumMatrixTable = (is_null($sumMatrix)) ? "matrices diferente dimension" : $sumMatrix->drawTable();
$multMatrix = $ops->multMatrix();;
$multMatrixTable = (is_null($multMatrix)) ? "matrices diferente dimension" : $multMatrix->drawTable();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $matrix1->drawTable(); ?>
    <br>
    <?= $matrix2->drawTable(); ?>
    <br>
    <?= $sumMatrixTable; ?>
    <br>
    <?= $multMatrixTable; ?>
</body>

</html>