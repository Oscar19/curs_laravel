<?php 
require_once("guerrero.php");
require_once("mago.php");
$hechizoFuego = new Hechizo("Bola de Fuego", 50);
$espada = new Arma("Espada de Acero", 30);
// crear más armas
// Crear personajes
$guerrero = new Guerrero("Arthas", 10, 100, 80, $espada);
$mago = new Mago("Jaina", 12, 80, 120, $hechizoFuego);

//crear mas guerreros y magos
    echo "-------Jugar-------\n";
    echo "1. Guerrero\n";
    echo "2. Mago\n";
    echo "\n";
    $jugador = readline("Quien quieres ser: ");
    switch($jugador){
        case 1 :
            echo $guerrero->MostrarInfo()."\n";
        break;
        case 2 :
            echo $mago ->MostrarInfo()."\n";
        break;
    }
//crear menu

    
    //echo $guerrero->AtaqueFisico()."\n";
    
    //echo $mago->LanzarHechizo()."\n";

?>