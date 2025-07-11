<?php 
    /*
        Donat un array d’strings, fes un programa que:
        Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters 
        usant la funció array_filter().
    */

    $palabras = array("casa", "perro", "armario", "coche", "mesa");

    function contar($text){
        // contamos el numero de palabras, usando el módulo extraemos los que son pares. 
        return strlen($text) % 2 == 0;
    }
    $numString = array_filter($palabras, "contar");

    print_r($numString);
?>