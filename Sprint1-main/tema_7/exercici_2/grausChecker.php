<?php 
    declare(strict_types=1);

    namespace oscanguera\exercici_2;

    class GrausChecker{

        public function __construct(){}
      

        function CalcularNota(int $nota){
            if($nota >= 60 ){
                $resultado = "Está en primera división";
            }
            elseif($nota >= 45 && $nota <= 59){
                $resultado = "Está en segunda división";
            }
            elseif($nota >= 33 && $nota <= 44){
                $resultado = "Está en tercera división";
            }
            elseif($nota <= 32){
                $resultado = "No está aprobado";
            }
            else{
                $resultado = "no es una nota";
            }
            return $resultado;

        }
        
    
    }
      
    ?>
