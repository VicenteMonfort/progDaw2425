<?php

function autoloading($class){
    $file = "classes/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }else{
        die("La clase $class no se encuentra.");
    }
}


spl_autoload_register("autoloading");