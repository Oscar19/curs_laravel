  <?php

    $chocolate = readline("Cantidad de chocolate: ");
    $chicles = readline("Cantidad de chicles: ");
    $caramelos = readline("Cantidad de caramelos: ");

        function chocolate($cantidad){
            $precio = 1;
            $precio_chocolate = $cantidad * $precio;
            return $precio_chocolate;
        }

        function chicles($cantidad){
            $precio = 0.5;
            $precio_chicles = $cantidad * $precio;
            return $precio_chicles;
        }

        function caramelos($cantidad){
            $precio = 1.5;
            $precio_caramelos = $cantidad * $precio;
            return $precio_caramelos;
        }

        $precio_chocolate = chocolate($chocolate);
        $precio_chicles = chicles($chicles);
        $precio_caramelos = caramelos($caramelos);

        function calcular_total($chocolate, $chicles, $caramelos){
            $total = chocolate($chocolate) + chicles($chicles) + caramelos($caramelos);
            return $total;
        }

        echo "Chocolate: " . $chocolate . " x " . $precio_chocolate . "€\n";
        echo "Chicles: " . $chicles . " x " . $precio_chicles . "€\n";
        echo "Caramelos: " . $caramelos . " x " . $precio_caramelos . "€\n";
        echo "Total: " . calcular_total($chocolate, $chicles, $caramelos) . "€\n";
    
    ?>
