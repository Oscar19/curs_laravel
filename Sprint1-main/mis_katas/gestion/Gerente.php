<?php 
    class Gerente extends Empleado{
        private $departamento;

        public function __construct($nombre, $salario, $departamento){
            parent::__construct($nombre, $salario);
            $this->departamento = $departamento;
        }
        public function getDepartamento(){
            return $this->departamento;
        }
        public function aumentarSalario($porcentaje){
            parent::aumentarSalario($porcentaje);
        }
    }
?>