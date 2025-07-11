<?php 
    abstract class Edificio{
        protected $nombre;
        protected $plantas;
        protected $superficie;

        protected $num_habitaciones;
        public function __construct(string $nombre, int $plantas, int $superficie, int $num_habitaciones){
            $this->nombre = $nombre;
            $this->plantas = $plantas;
            $this->superficie = $superficie;
            $this->num_habitaciones = $num_habitaciones;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getPlantas(){
            return $this->plantas;
        }
        public function getSuperficie(){
            return $this->superficie;
        }
        public function getNumHabitaciones(){
            return $this->num_habitaciones;
        }

        abstract public function calcularLimpieza();
     
    }
?>