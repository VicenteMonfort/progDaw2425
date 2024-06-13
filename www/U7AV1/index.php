<?php
require_once "autoloader.php";


//Creación de objetos
$cc1 = new CuentaCorriente("Vicente", 100);
$ca2 = new CuentaAhorro("Antonio", 100, 1);
$ci3 = new CuentaInversion("Marcelo", 100, 10);

//Opeaciones sobre los objetos
echo "CUENTA CORRIENTE<br>";
echo "------------------------------<br>";
echo "Cuenta Corriente de " .  $cc1->getTitular() . " con " . $cc1->getCantidad() . " euros <br>";
$cant=100;
$cc1->ingresar($cant);
echo "Cuenta Corriente de " .  $cc1->getTitular() . " con " . $cc1->getCantidad() . " euros, después de ingresar $cant euros<br>";

echo "<br>CUENTA AHORRO<br>";
echo "-------------------------<br>";
echo "Cuenta Ahorro de " .  $ca2->getTitular() . " con " . $ca2->getCantidad() . " euros y al " . $ca2->getInteres() . "% de interés<br>";
$ca2->retirar($cant);
echo "Cuenta Ahorro de " .  $ca2->getTitular() . " con " . $ca2->getCantidad() . " euros, después de intentar retirar $cant euros<br>";
$ca2->ingresar($cant);
echo "Cuenta Ahorro de " .  $ca2->getTitular() . " con " . $ca2->getCantidad() . " euros, después de ingresar $cant euros<br>";

echo "<br>CUENTA INVERSIÓN<br>";
echo "-----------------------------<br>";
echo "Cuenta Inversión de " .  $ci3->getTitular() . " con " . $ci3->getCantidad() . " euros y con el " . $ci3->getInversion() . "% del saldo reservado en inversión<br>";
$ci3->retirar($cant);
echo "Cuenta Inversión de " .  $ci3->getTitular() . " con " . $ci3->getCantidad() . " euros, después de intentar retirar $cant euros<br>";
$cant2=90;
$ci3->retirar($cant2);
echo "Cuenta Inversión de " .  $ci3->getTitular() . " con " . $ci3->getCantidad() . " euros, después de intentar retirar $cant2 euros<br>";