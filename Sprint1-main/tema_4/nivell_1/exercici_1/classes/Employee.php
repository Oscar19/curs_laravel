<?php 
    class Employee{
        public $nombre, $sueldo;
        public function __construct($nombre, $sueldo){
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }
      
        public function imprimir(){
         
            if($this->sueldo > 6000){
                echo $this->nombre . " tiene que pagar impuestos<br><br>";
            }
            else{
                echo $this->nombre . " No tiene que pagar impuestos<br>";
            }
        }
    }
?>