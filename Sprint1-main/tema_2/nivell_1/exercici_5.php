<?php 
    
        $nota = readline("Introduce una nota: \n");

        function calcular_nota($nota){
            if($nota >= 60 ){
                $resultado = "Está en primera división\n";
            }
            elseif($nota >= 45 && $nota <= 59){
                $resultado = "Está en segunda división\n";
            }
            elseif($nota >= 33 && $nota <= 44){
                $resultado = "Está en tercera división\n";
            }
            elseif($nota <= 32){
                $resultado = "No está aprobado\n";
            }
            else{
                $resultado = "no es una nota";
            }
            return $resultado;

        }
        echo calcular_nota($nota);
    
    
      
    ?>
