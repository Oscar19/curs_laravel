<?php 

require_once "animal.php";
    
class Perro extends animal
{

    public function makeSound() :string
    {
        return "Guay Guay!";
    }

}
?>