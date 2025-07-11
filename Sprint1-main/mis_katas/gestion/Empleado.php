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
    require_once("Gerente.php");
    abstract class Empleado{
        private $nombre;
        private $salario;
        public function __construct($nombre, $salario){
            $this->nombre = $nombre;
            $this->salario = $salario;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function aumentarSalario($porcentaje){
            $aumento = ($this->salario * $porcentaje) / 100;
            $this->salario += $aumento;
        }
    }
?>