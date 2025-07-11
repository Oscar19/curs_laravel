<?php 
    echo "***** Menu *****\n";
    echo "1. Crear edificio\n";
    echo "2. Editar edificio\n";
    echo "3. Eliminar edificio\n";
    echo "4. Mostrar edificios\n";
    $escoger = readline("Que quieres hacer? ");

    switch ($escoger) {
        case 1:
        break;
        case 2:
        break;
        case 3:
        break;
        case 4:
        break;
        default:
            echo "Opción no válida";
    }
    function altaEdificio(){
        readline("Nombre del edicicio: ");
        readline("Pantas del edificio: ");
        readline("Superficie del edificio: ");
    }
   
?> 