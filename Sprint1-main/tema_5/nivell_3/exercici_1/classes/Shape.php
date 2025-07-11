<?php 
   
    abstract class Shape {
        protected $ample;
        protected $altura;
    
        public function __construct(int $ample, int $altura) {
            $this->ample = $ample;
            $this->altura = $altura;
        }
    
        public function getAltura() {
            return $this->altura;
        }
    
        public function getBase() {
            return $this->ample;
        }
    
    abstract public function calcularArea();
    }
    
    
    ?>