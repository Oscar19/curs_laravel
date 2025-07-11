<?php
    require_once("class/coche.php");
    $coche1 = new Coche2("Audi", 230, "469876eft", TipoCombustible::Gasolina);
    $coche2 = new Coche2("Toyota", 150, "45569adf", TipoCombustible::Hibrido);
    $coche3 = new Coche2("Porsche", 450, "45569adf", TipoCombustible::Electrico);
    $coche4 = new Coche2("Mercedes", 250, "45569adf", TipoCombustible::Gasoil);

    $coches = array($coche1,$coche2,$coche3,$coche4);
    
    $maxCilindrada = null;
    foreach ($coches as $coche) {
        if ($coche->getCombustible() === TipoCombustible::Gasolina) {
            echo $coche->getTipoCombustible() . "\n";
        }
        if ($maxCilindrada === null || $coche->getCilindrada() > $maxCilindrada->getCilindrada()) {
            $maxCilindrada = $coche;
        }    
    }
    echo "Coche de mayor cilindrada: ".$maxCilindrada->getDescripcion() ."\n";
   
?>