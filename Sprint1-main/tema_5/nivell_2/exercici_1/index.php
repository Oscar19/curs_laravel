<?php 
    
    require_once("classes/Rectangulo.php");
    require_once("classes/Triangulo.php");
   
    $triangulo = new triangulo(10,5);
    echo "El area del triangulo es: ".$triangulo->calcularArea()."\n";
  
   

    $rectangulo = new rectangulo(15,5);
    echo "El area del rectangulo es: ". $rectangulo->calcularArea() ."\n";
  
   


  