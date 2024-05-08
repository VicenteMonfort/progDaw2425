<?php
require_once "autoload.php";

$lighting = new Lighting();
echo json_encode($lighting->monitor($_POST["filter"]), JSON_INVALID_UTF8_IGNORE);
