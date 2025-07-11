<?php 
    require_once("classes/empleado.php");

    $persona1 = new Persona("Oscar", 27);
    $empleado1 = new Empleado("Xavi", 30, 30000);
    echo "Nombre: " . $persona1->getNombre() . "\n";
    echo "Edad: " . $persona1->getEdad() . "\n";
    echo "\n";
    echo "Nombre: " . $empleado1->getNombre() . "\n";
    echo "Edad: " . $empleado1->getEdad() . "\n";
    echo "Sueldo: " . $empleado1->getSueldo() . "\n";
    echo "\n";

?>