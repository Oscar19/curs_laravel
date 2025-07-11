<?php 
require_once("Electrico.php");
require_once("Hibrido.php");



$cocheElectrico1 = new Electrico("Tesla", "Model 3", 2022, 35000, 400);
echo $cocheElectrico1->encender() . "\n";
echo $cocheElectrico1->cargarBateria() . "\n";
echo $cocheElectrico1->mostrarDetalles() . "\n";
echo $cocheElectrico1->mover() . "\n";

$cocheHibrido1 = new Hibrido("Toyota", "Prius", 2022, 30000, 8.8, 45);
echo $cocheHibrido1->encender() . "\n";
echo $cocheHibrido1->cargarBateria() . "\n";
echo $cocheHibrido1->llenarDeposito() . "\n";
echo $cocheHibrido1->mostrarDetalles() . "\n";
echo $cocheHibrido1->mover() . "\n";

?>