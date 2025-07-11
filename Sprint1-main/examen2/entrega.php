<?php 
include_once("sprint.php");
    class Entrega{
        private $nombre;
        private Sprint $sprint;
        private $numEntregas;
        private $fecha;
        public function __construct($nombre, Sprint $sprint, $numEntregas, $fecha){
            $this->nombre = $nombre;
            $this->sprint = $sprint;
            $this->numEntregas = $numEntregas;
            $this->fecha = $fecha;
        }
        public function getSprint(){
            return $this->sprint->value;
        }
        public function cantidadCorregir(){
            return $this->numEntregas;
        }
        public function getNombre(){
            return $this->nombre;
        }
      
    }

?>
