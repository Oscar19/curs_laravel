<?php 
/*
Confeccionar una clase Persona que tenga como atributos el nombre y la edad. El constructor recibe los datos para inicializar dichos 
atributos. Otro método imprime los datos. Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo
sueldo. El constructor recibe los tres atributos de la clase Empleado. Llamar al constructor de la clase padre para inicializar los 
atributos nombre y edad del Empleado. Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la 
clase Empleado y llamar a sus métodos.
*/

class Persona{
    

    public function __construct(private $nombre, private $edad){
    }
    public function getNombre(){
        return $this->nombre;
    }
   
    public function getEdad(){
        return $this->edad;
    }
   
}
?>