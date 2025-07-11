<?php 
/* 
Crea un sistema de gestión de empleados que permita realizar las siguientes operaciones:

    Crear una clase Empleado con las siguientes propiedades y métodos:
        Propiedades: nombre, salario.
        Método __construct para inicializar las propiedades.
        Métodos getNombre y getSalario para obtener el nombre y el salario del empleado, respectivamente.
        Método aumentarSalario($porcentaje) para aumentar el salario del empleado en un cierto porcentaje.

    Crea una clase Gerente que herede de Empleado con las siguientes propiedades y métodos adicionales:
        Propiedad adicional: departamento.
        Método __construct para inicializar las propiedades y llamar al constructor de la clase padre.
        Método getDepartamento para obtener el departamento del gerente.

    Crea algunos objetos Empleado y Gerente, realiza operaciones con ellos y muestra los resultados.
*/
require_once("Empleado.php");

$empleado1 = new Empleado("Oscar", 2500);
$empleado1->aumentarSalario(20);

/*echo "Nombre : ". $empleado1->getNombre(). "\n";
echo "Salario mensual: $" . $empleado1->getSalario() . "\n";
echo "Salario anual: $" . ($empleado1->getSalario() * 12) . "\n";*/
// Crear un objeto Gerente
$gerente1 = new Gerente("Jaime", 3500, "Ventas");
$gerente1->aumentarSalario(10); // Aumentar el salario en un 10%



// Mostrar información del gerente
echo "\nNombre gerente: " . $gerente1->getNombre() . "\n";
echo "Salario mensual: $" . $gerente1->getSalario() . "\n";
echo "Salario anual: $" . ($gerente1->getSalario() * 12) . "\n";
echo "Departamento: " . $gerente1->getDepartamento() . "\n";

?>