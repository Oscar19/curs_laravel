<?php 
    /* Escribe un programa que pida 10 números por teclado y que luego muestre los números
            introducidos junto con las palabras "máximo" y "mínimo" al lado del máximo y del
            mínimo respectivamente.*/ 
    $count = 0;
    $numeros = array();
    for ($i = 0; $i < 10; $i++) {
        $num = readline($count." Escribe el numero: ");
        $numeros[] = $num;
        $count++;
    }
    $numMax = max($numeros);
    $numMin = min($numeros);

    echo "El número máximo es: ".$numMax."\n";
    echo "El número minimo es: ".$numMin."\n";
    echo "\n";
    print_r($numeros);

?>