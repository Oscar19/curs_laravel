<?php 
    require_once("classes/empleado.php");
//Carlos Gutiérrez, con dni 23456345 y salario inicial de 25000.
    $empleado1 = new Empleado("23456345", "Carlos", "Gutiérrez", 25000);
    $empleado2 = new Empleado("34234123", "Ana", "Sánchez", 27500);
   // echo $empleado1;
    $empleado1->imprimir();
   // echo $empleado2;
    $empleado2->imprimir();

    echo "Añadir un nuevo empleado \n";
    $dni = readline("DNI: ");
    $nombre = readline("Nombre: ");
    $apellido = readline("Apellido; ");
    $salario = readline("Salario anual:");

    $empleado3 = new Empleado($dni, $nombre, $apellido, $salario);

    $empleado3->imprimir();



?>