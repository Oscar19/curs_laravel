<?php 
    

    class Shape{
        public $ample, $alçada, $area;
       
        public function altura($alçada){
            $this->alçada = $alçada;
        }
        public function base($ample){
            $this->ample = $ample;
        }
        public function resultat(){
            echo $this->area;
        }
        
    }

    class triangulo extends Shape{
        public function calcularArea(){
            $this->area = ($this->alçada * $this->ample)/2;
        }
    }
    class rectangulo extends Shape{ 
        public function calcularArea(){
            $this->area = ($this->alçada * $this->ample);
        }
    }
    
    ?>