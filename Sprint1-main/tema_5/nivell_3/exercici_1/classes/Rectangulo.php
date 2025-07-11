<?php 
    require_once("Shape.php");
 
    class rectangulo extends Shape{ 
        public function calcularArea(){
            $area = ($this->altura * $this->ample);
            return $area;
        }
    }
?>