<?php 
    class Empleado{
        private $nombre;
        private $salario;
        private $cargo;

        public function __construct($nombre, $salario, $cargo){
            $this->nombre = $nombre;
            $this->salario = $salario;
            $this->cargo = $cargo;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function getCargo(){
            return $this->cargo;
        }

        public function calcularSalario(){
            return $this->salario *12;
        }
    }
?>