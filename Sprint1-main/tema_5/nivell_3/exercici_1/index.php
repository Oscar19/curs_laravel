<?php 
    
    require_once("classes/Rectangulo.php");
    require_once("classes/Triangulo.php");
    require_once("classes/Circunferencia.php");

    
        echo "*****Menu*****\n";
        echo "Indica el area del objeto quieres calcular: \n";
        echo "1. Triangulo\n";
        echo "2. Rectangulo\n";
        echo "3. Circulo\n";
        $geometria = readline("Que quieres hacer( número )? ");
    
        switch ($geometria) {
            case 1:
                $ample = readline("Indica la base del triangulo: ");
                $altura = readline("Indica la altura del triangulo: ");
                $triangulo = new triangulo($ample, $altura);
                echo "El area del triangulo es: ".$triangulo->calcularArea()."\n";
            break;
            case 2:
                $ample = readline("Indica la base del rectangulo: ");
                $altura = readline("Indica la altura del rectangulo: ");
                $rectangulo = new rectangulo($ample, $altura); 
                echo "El area del rectangulo es: ". $rectangulo->calcularArea()."\n";
            break;
           case 3:
                $radio = readline("Indica el radio de la circumferencia: ");
                $circunferencia = new circunferencia($radio);
                echo "El area de la circunferencia es: ". $circunferencia->calcularArea() ."\n";
            break;
            default:
            echo "Opción no válida.";
        }
      
   


  