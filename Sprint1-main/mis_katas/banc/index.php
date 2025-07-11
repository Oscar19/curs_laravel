<?php 
    /* Donat el diagrama de classes de la imatge.

Programa una aplicació que tingui programades totes les opcions del següent menú:

    0.- Sortir de l'aplicació.
    1.- Crear client/a.
    2.- Eliminar client/a.
    3.- Crear compta d'un client/a.
    4.- Ingressar euros en un compte d'un client/a.
    5.- Retirar euros en un compte d'un client/a.

A tenir en compte:
- El saldo inicial de totes les comptes, ha de ser 0 €.
- En crear un client/a, no haurà de tenir cap compte “associada”.
- El diagrama UML mostrà les propietats i mètodes mínims que han de tenir les classes, 
però pots crear-ne més si és necessari. */

include_once("banc.php");
$banc = new Banc();

do {
    echo "\nMenu:\n";
    echo "0.- Sortir de l'aplicació.\n";
    echo "1.- Crear client/a.\n";
    echo "2.- Eliminar client/a.\n";
    echo "3.- Crear compte d'un client/a.\n";
    echo "4.- Ingressar euros en un compte d'un client/a.\n";
    echo "5.- Retirar euros en un compte d'un client/a.\n";
  
    $opcio = readline("Trieu una opció: ");

    switch ($opcio) {
        case 0:
            echo "Sortint de l'aplicació...\n";
            break;
        case 1:
            $dni = readline("Introduïu el DNI del client: ");
            $dni = readline("Introduïu el nom del client: ");
            $banc->crearClient($dni, $nom);
            break;
        case 2:
            $dni = readline("Introduïu el DNI del client a eliminar: ");
            $banc->eliminarClient($dni);
            break;
        case 3:
            $dni = readline("Introduïu el DNI del client: ");
            $numeroCompte = readline("Introduïu el número de compte: ");
            $banc->crearCompte($dni, $numeroCompte);
            break;
        case 4:
            
            $dni = readline("Introduïu el DNI del client: ");
            $numeroCompte = readline("Introduïu el número de compte: ");
            $quantitat = readline("Introduïu la quantitat a ingressar:  ");
            $banc->ingressar($dni, $numeroCompte, $quantitat);
            break;
        case 5:
            $dni = readline("Introduïu el DNI del client: ");
            $numeroCompte = readline("Introduïu el número de compte: ");
            $quantitat = readline("Introduïu la quantitat a retirar:");
            $banc->retirar($dni, $numeroCompte, $quantitat);
            break;
        default:
            echo "Opció no vàlida.\n";
            break;
    }
} while ($opcio != 0);
?>
