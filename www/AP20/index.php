<?php
require_once "autoload.php";

$refrigerado = new Refrigerados("R1",-5,"10/10/2022",123456,"10/10/2021","Portugal");
var_dump($refrigerado);

$aire = new Aire("2%N, 34%O, 45%CO2",-15,"11/05/2022",123456,"11/12/2021","Senegal");
var_dump($aire);

$agua = new Agua("23g/L",-15,"11/05/2022",123456,"11/12/2021","Senegal");
var_dump($agua);

$nitrogeno = new Nitrogeno("método1"," 23 seg", -15,"11/05/2022",123456,"11/12/2021","Senegal");
var_dump($nitrogeno);

$fresco = new Frescos("01/06/2022",123456,"11/12/2019","España");
var_dump($fresco);