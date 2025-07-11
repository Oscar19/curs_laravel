<?php 
require_once ("tipoCombustible.php");
    class Coche{
        private $marca;
        private $cilindrada;
        private $matricula;
        private $color;
        private TipoCombustible $combustible;

        public function __construct(string $marca, int $cilindrada, string $matricula, string $color, TipoCombustible $combustible)
        {
            $this->marca = $marca;
            $this->cilindrada = $cilindrada;
            $this->matricula = $matricula;
            $this->color = $color;
            $this->combustible = $combustible;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getCilindrada(){
            return $this->cilindrada;
        }
        public function getColor(){
            return $this->color;
        }
        public function getCombustible(){
            return $this->combustible;
        }
        public function mostrarCombustible(){
            return "Coche: " . $this->marca . " es un " . $this->combustible->value;
        }
        public function descripcion(){
            return "Coche: " . $this->marca . ", Cilindrada: " . $this->cilindrada . "Matrícula: " . $this->matricula . "Color: " . $this->color . ", Combustible: " . $this->combustible->value;

        }

    }
?>