<?php 
    require_once("Circle.php");
    class circunferencia implements Circle{
        protected $radio;
        public function __construct(int $radio)  {
            $this->radio = $radio;
        }
        public function getRadio(){
            return $this->radio;
        }
        public function calcularArea(): int
        {
            $area = M_PI * pow($this->radio, 2);
            return $area;
        }
        
    }
?>