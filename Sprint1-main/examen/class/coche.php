<?php 
require_once("Combustible.php");

    class Coche2{
        private $marca;
        private $cilindrada;
        private $matricula;
        private TipoCombustible $combustible;

        public function __construct($marca, $cilindrada, $matricula, TipoCombustible $combustible) {
            $this->marca = $marca;
            $this->cilindrada = $cilindrada;
            $this->matricula = $matricula;
            $this->combustible = $combustible;
        }
        public function getTipoCombustible(){
            return "El coche ". $this->marca . " es de ". $this->combustible->value;
        }
        public function getCombustible(){
            return $this->combustible;
        }
        public function getCilindrada(){
            return $this->cilindrada;
           // return "El coche ". $this->marca . " tiene la máxima cilindrada, es de: ".$this->cilindrada;
        }
       public function getDescripcion() {
            return "Coche: " . $this->marca . ", Cilindrada: " . $this->cilindrada . "Matrícula: " . $this->matricula . ", Combustible: " . $this->combustible->value;
        }

       
       
    }
  
 
?>