<?php 
    //recorrer matriz

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

foreach ($matriz as $fila) {
    foreach ($fila as $elemento) {
        echo $elemento . "\n";
    }
}

    

?>