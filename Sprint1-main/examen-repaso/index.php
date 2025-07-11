<?php 
require_once("coche.php");
     $coche1 = new Coche("Audi", 230, "469876eft", "Verde", TipoCombustible::Gasolina);
     $coche2 = new Coche("Toyota", 150, "45569adf", "Azul",TipoCombustible::Hibrido);
     $coche3 = new Coche("Porsche", 450, "45569adf", "Blanco", TipoCombustible::Electrico);
     $coche4 = new Coche("Mercedes", 250, "45569adf", "Rojo", TipoCombustible::Gasoil);

     $Garaje =  array($coche1, $coche2, $coche3, $coche4);
     $maxCilindrada = null;
     foreach ($Garaje as $coche){
       // echo $coche->descripcion()."\n";

       if($maxCilindrada === null || $maxCilindrada->getCilindrada() < $coche->getCilindrada()){
            $maxCilindrada = $coche;
       }
       if ($coche->getCombustible() === TipoCombustible::Gasolina){
            echo $coche->mostrarCombustible()."\n";
       }
       if ($coche->getColor() == "Rojo"){
        echo "El coche de color rojo es un ".$coche->getMarca()."\n";
       }
     }
     echo "El coche con más cilindrada es: ".$maxCilindrada->getMarca()." con ". $maxCilindrada->getCilindrada()."\n";
?>
