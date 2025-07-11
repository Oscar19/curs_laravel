<?php 
    require_once("coche.php");

    $coche1 = new Coche("Audi", 230, "469876eft", "Verde", TipoCombustible::Gasolina);
    $coche2 = new Coche("Toyota", 150, "45569adf", "Azul",TipoCombustible::Hibrido);
    $coche3 = new Coche("Porsche", 450, "45569adf", "Blanco", TipoCombustible::Electrico);
    $coche4 = new Coche("Mercedes", 250, "45569adf", "Rojo", TipoCombustible::Gasoil);

    $Garaje = array($coche1, $coche2, $coche3, $coche4);

    $maxpotencia = null;
    foreach($garaje as $coche){
        if($maxpotencia === null || $coche->getCilindrada() < $maxpotencia->getCilindrada()){
            $maxpotencia = $coche;
        }
        print_r ($coche);

    }
    //echo "El coche con mas potenciaes: ". $maxpotencia->getMarca(). " con una cilindrada de : ". $maxpotencia->getCilindrada();

?>