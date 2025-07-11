<?php 
    /* Escribe una clase en PHP llamada Empleado que represente a un empleado en una empresa. 
    Esta clase debería tener las siguientes características:

    Debe tener propiedades para almacenar el nombre, el salario y el cargo del empleado.

    Debe tener métodos para establecer y obtener el nombre, el salario y el cargo del empleado.

    Debe tener un método para calcular y devolver el salario anual del empleado 
    (suponiendo que el salario proporcionado es mensual).
    */
    require_once("empleado.php");

    $empleado1 = new Empleado("Oscar", 3000, "diseñador");
   

    echo "Nombre: ". $empleado1->getNombre() ."\n";
    echo "Cargo: ". $empleado1->getCargo() ."\n";
    echo "Salario mensual: ". $empleado1->getSalario() ."\n";
    echo "Salario anual: ". $empleado1->calcularSalario()."\n" ;

?>