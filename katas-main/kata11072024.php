<?php 
    function marco($text){
        
        $palabras = explode(' ', $text);
        $long = 0;
        foreach ($palabras as $palabra) {
            if (mb_strlen($palabra) > $long) {
                $long = mb_strlen($palabra);
            }
        }
        $top = $long + 4;
   
        echo str_repeat("#", $top);
        echo "\n";
        
        foreach ($palabras as $palabra){
            $espacio = $long - mb_strlen($palabra);
            echo "# $palabra" . str_repeat(' ', $espacio) . " #\n";
        }
        
        echo str_repeat("#", $top);

    }
    
    
    $frase = readline("Introduce una frase: ");

     marco($frase);

/*
    $cadena = "¿Has";
    $longitud = 0;

    for ($i = 0; isset($cadena[$i]); $i++) {
        $longitud++;
    }

    echo "La cadena '$cadena' tiene $longitud caracteres.";*/


?>