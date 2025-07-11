<?php 
    $estudiantes = [
        [
            "nombre" => "Juan",
            "calificaciones" => [
                "matematicas" => 85,
                "historia" => 90,
                "ciencias" => 78
            ]
        ],
        [
            "nombre" => "María",
            "calificaciones" => [
                "matematicas" => 92,
                "historia" => 88,
                "ciencias" => 95
            ]
        ],
        [
            "nombre" => "Carlos",
            "calificaciones" => [
                "matematicas" => 70,
                "historia" => 85,
                "ciencias" => 80
            ]
        ]
    ];
// Agregar un nuevo estudiante: Añade un nuevo estudiante al array de estudiantes con sus calificaciones.
    $estudiantes[] = array("nombre" => "oscar",
    "calificaciones" => [
        "matematicas" => 80,
        "historia" => 60,
        "ciencias" => 50
    ]
    );
    

//Actualizar la calificación de una materia: Actualiza la calificación de "historia" de "Juan" a 95.
    $cienciasNota = null;
    foreach ($estudiantes as $estudiante){
        if($estudiante["nombre"] == "Juan"){
            $estudiante["calificaciones"]["historia"] +20;
           // print_r ($estudiante);
        }
        //calcular media de cada estudiante
        $calificaciones = $estudiante["calificaciones"];
        $count = count($calificaciones);
        $notas = array_sum($calificaciones);
        $media = $notas / $count."\n";
       echo $estudiante["nombre"]." ha sacado de media: ".$media."\n";

        if ($cienciasNota === null || $cienciasNota["calificaciones"]["ciencias"] < $calificaciones["ciencias"]){
            $cienciasNota = $estudiante;
        }
    }
    echo $cienciasNota["nombre"]. " ha sacado la mejor nota de ciencias, con un: ". $cienciasNota["calificaciones"]["ciencias"]."\n";

//Eliminar un estudiante: Elimina a "Carlos" del array de estudiantes.

//Calcular el promedio de calificaciones de cada estudiante: Calcula y muestra el promedio de calificaciones de cada estudiante.

//Encontrar la calificación más alta en una materia: Encuentra y muestra el nombre del estudiante con la calificación más alta en "ciencias".

?>