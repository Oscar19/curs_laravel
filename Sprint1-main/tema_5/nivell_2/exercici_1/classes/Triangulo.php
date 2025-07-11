<?php
    require_once("Shape.php");
 
    class triangulo extends Shape{
        public function calcularArea() :int
        {
            $area = ($this->altura * $this->ample)/2;
            return $area;
        }
    }
?>