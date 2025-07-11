<?php 
    abstract class Shape{
        protected $ample;
        protected $altura;

        public function __construct(int $ample, int $altura){
            $this->ample = $ample;
            $this->altura = $altura;  
        }
       
        public function getAltura($altura){
            return $this->altura = $altura;
        }
        public function getBase($ample){
            return $this->ample = $ample;
        }
        abstract public function calcularArea() : int;
         
    }
    
    
    ?>