<?php

     
            $notas_alumnos = array(
            "Alumno1" => array(7 ,5 ,4 ,8 ,3),
            "Alumno2" => array(6 ,5 ,3 ,8 ,7),
            "Alumno3" => array(2 ,3 ,5,8 ,7)
        );
       function media_clase($notas_alumnos){
            foreach($notas_alumnos as $notas){
                $suma_notas_total = array_sum($notas);
                $count_notas = count($notas);
                $media_clase = $suma_notas_total / $count_notas;
                return $media_clase;
            }
        }
        echo "La media de la clase es: ". media_clase($notas_alumnos) ."\n";
       function media_alumno($notas){
            $suma_notas_alumno = array_sum($notas);
            return $suma_notas_alumno / 5;
        }
        foreach($notas_alumnos as $alumnos => $notas){
            $media = media_alumno($notas);
            echo "La media de $alumnos: $media \n";
        }
       $media_alumno = media_alumno($notas);
    
     
    ?>
 
