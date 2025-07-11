<?php 
/*
Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map().
*/
    $numeros = array(4,7,2,9,3);

    function cubo($num){
        return $num *$num *$num;
    }
    $cub = array_map ("cubo", $numeros);

    print_r ($cub);
?>