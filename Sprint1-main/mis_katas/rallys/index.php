<?php 
  /*  L'organització d’un campionat de cotxes vol tenir un programa per gestionar part de 
  la informació que fins ara no tenien informatitzada. Volen saber de cada escuderia que 
  participa en el campionat, el nom, el pressupost que tenen i el país d’origen. 
  Cada escuderia pot tenir més d’un cotxe i de cadascun volen saber la potència, la velocitat màxima, 
  el color i el preu de mercat. 

    De les persones treballadores de les diferents escuderies volen saber el nom, el primer cognom, 
    l’edat, el temps que porten a l’escuderia i el sou. El sou base és de 50.000 €. A més, 
    dels/les pilots volen saber la seva alçada, el pes. El sou dels/les pilots és el sou base de 
    les persones treballadores més 10.000 € per cada any d’antiguitat a l’escuderia, més 50.000 € 
    de perillositat. 
    
    Dels/les mecànics volen saber si tenen estudis superiors de mecànica o no. I el seu sou es 
    calcula sumant 10.000 € per cada any d’antiguitat a l’escuderia més el sou base.
    
    Es demana que l’aplicació sigui capaç de donar d’alta, de baixa i de veure pilots i mecànics, 
    i de veure escuderies i bòlids. Les escuderies i els bòlids poden estar introduïts directament 
    en el codi.*/
    require_once("escuderia.php");
    require_once("pilot.php");
    require_once("mecanic.php");
    require_once("monoplaza.php");

$escuderia1 = new Escuderia("Ferrari", 5000000, "Italia");
$coche1 = new Coche(1000, 350, "Vermell", 1500000);
$escuderia1->addMonoplaza($coche1);

// Crear alguns pilots i mecànics
$pilot1 = new Pilot("Marc", "Marquez", 25, 5, 175, 70);
$mecanic1 = new Mecanic("Joan", "Perez", 30, 10, true);

//falta alta, baixa veure pilots
//veure escuderies i bolids
echo "Informació de l'escuderia:<br>";
echo "Nom: ".$escuderia1->$nombre.", Pressupost: ".$escuderia1->$presupuesto.", País: ".$escuderia1->$pais."\n";
echo "Cotxes:<br>";
$escuderia1->mostrarMonoplaza();

?>