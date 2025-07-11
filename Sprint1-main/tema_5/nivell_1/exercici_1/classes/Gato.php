<?php 
    require_once "animal.php";
    
    class Gato extends animal
    {
    
        public function makeSound() :string
        {
            return "Miau miau!";
        }
    
    }
?>