<?php 
     $alumnos = [
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
    $maxHistoria = null;
    foreach($alumnos as $alumno){
        //calcular media de cada alumno
        $notas = $alumno['calificaciones'];
        $num = count($notas);
        $notaSum = array_sum($notas);
        $media = $notaSum /$num;
        echo "El alumno ". $alumno['nombre']. " ha sacado de media: ".$media."\n";

        //nota más alta en historia
        if($maxHistoria === null || $notas['historia'] < $maxHistoria['calificaciones']['historia']){
            $maxHistoria = $alumno;
        }
    }
    echo $maxHistoria['nombre']. "ha sacado la nota más alta en la asignatura de historia con un: ".$maxHistoria['calificaciones']['historia']."\n";

?>