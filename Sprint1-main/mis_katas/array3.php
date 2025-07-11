<?php 
    /* 
Ejercicio: Calcular la Suma y el Promedio de Números en un Array
Objetivo:

Crear un script en PHP que tome un array de números, calcule la suma de esos números y luego calcule el promedio de esos números.
Especificaciones:

    Crear un array de números enteros.
    Calcular la suma de los números en el array.
    Calcular el promedio de los números en el array.
    Mostrar la suma y el promedio en la pantalla.

Pasos:

    Crear un array de números enteros.
    Utilizar un bucle foreach para calcular la suma de los números.
    Calcular el promedio dividiendo la suma por la cantidad de elementos del array.
    Mostrar la suma y el promedio en la pantalla.*/

    $numeros = array(4,9,7,6,5);
    $suma = 0;
    foreach ($numeros as $num){
        $suma += $num ;
       }
       echo $suma."\n";
       $promedio = $suma / count($numeros);
       echo $promedio."\n";
?>