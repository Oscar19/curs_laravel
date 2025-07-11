<?php 
require_once("treballador.php");
    class Mecanic extends Treballador{
        private $estudisSuperiors;
        public function __construct($nom, $cognom, $edat, $temps, $estudisSuperiors)
        {
            parent::__construct($nom, $cognom, $edat, $temps);
            $this->estudisSuperiors = $estudisSuperiors;
        }
        public function getEstudisSuperiors(){
            return $this->estudisSuperiors;
        }
        public function calcularSou()
        {
            $antiguitat = $this->temps * 10000;
            return 5000 + $antiguitat;
        }
    }
?>