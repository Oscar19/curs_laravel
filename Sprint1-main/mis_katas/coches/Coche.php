<?php 
/* 
Objetivo:

Crear un sistema que gestione diferentes tipos de coches, permitiendo realizar las siguientes operaciones:

    Definir una clase abstracta Coche:
        Propiedades: marca, modelo, precio.
        Métodos abstractos: arrancar(), detener().
        Métodos comunes: getMarca(), getModelo(), getPrecio(), setPrecio($nuevoPrecio).

    Crear una clase CocheDeportivo que extienda Coche:
        Propiedad adicional: velocidadMaxima.
        Implementar los métodos abstractos.

    Crear una clase CocheFamiliar que extienda Coche:
        Propiedad adicional: numeroAsientos.
        Implementar los métodos abstractos.

    Crear un archivo index.php para crear instancias de coches, arrancar y detener coches, y mostrar su información.
    */
    
  
    abstract class Coche1{
        private $marca;
        private $modelo;
        private $precio;

        public function __construct($marca, $modelo , $precio){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->precio = $precio;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getmodelo(){
            return $this->modelo;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setPrecio($newPrecio){
            $this->precio = $newPrecio;
        }
        abstract public function arrancar();
        abstract public function detener();
        
    }
?>