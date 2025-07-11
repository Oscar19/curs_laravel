<?php 
    require_once("classes/Shape.php");
   
    $triangulo = new triangulo();
    $triangulo->altura(10);
    $triangulo->base(10);
    $triangulo->calcularArea();
    echo "El area del triangulo es: ";
    $triangulo->resultat();
    echo "<br>";

    $rectangulo = new rectangulo();
    $rectangulo->altura(15);
    $rectangulo->base(5);
    $rectangulo->calcularArea();
    echo "El area del rectangulo es: ";
    $rectangulo->resultat();
   


  