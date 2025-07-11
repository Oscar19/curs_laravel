<?php 
    class Players{
        private $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function __toString(){
            return "Nombre: ". $this->name;
        }
        
    }
    $player1 = new players('Federico');

    echo $player1;
?>