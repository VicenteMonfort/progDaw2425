<?php
function miAutoload($claseDesconocida)
{
    $fichero = "{$claseDesconocida}.php";
    if (file_exists($fichero)) {
        require_once $fichero;
    }
}
spl_autoload_register("miAutoload");
?>