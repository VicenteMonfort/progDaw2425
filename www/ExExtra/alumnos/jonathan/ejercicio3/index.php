<?php 
require_once 'autoloader.php';
$animal = new Animal('Toby', 5);
$animal->Describir();

$llamada = new Perro('Toby', 5, 'Pastor Aleman');
$llamada->Ladrar(); 

$migato = new Gato('kira', 10, 'puton');
$migato->Maullar(); 











?>