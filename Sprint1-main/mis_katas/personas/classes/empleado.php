<?php 
    require_once("persona.php");

    class Empleado extends Persona{
        private $sueldo;

        public function __construct($nombre,$edad,$sueldo) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->sueldo = $sueldo;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function getEdad() {
            return $this->edad;
        }
        
        public function getSueldo() {
            return $this->sueldo;
        }
    }
?>