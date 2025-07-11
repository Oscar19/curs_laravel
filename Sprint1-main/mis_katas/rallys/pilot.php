<?php 
require_once("treballador.php");
    class Pilot extends Treballador{

        private $altura;
        private $pes;
        public $souPerill = 50000;
        public function __construct($nom, $cognom, $edat, $temps, $altura, $pes)
        {
            parent::__construct($nom, $cognom, $edat, $temps);
            $this->altura = $altura;
            $this->pes = $pes;
        }
        public function Altura(){
            return $this->altura;
        }
        public function Pes(){
            return $this->pes;
        }
        public function calcularSou()
        {
            $antiguitat = $this->temps * 10000;
            return 50000 + $antiguitat + 50000;
        }
        public function mostrarInformacio(){
            
        }
    }
?>