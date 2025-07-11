
    <?php
    $X = array (10, 20, 30, 40, 50,60);
    print_r($X);
    echo "\n";
    echo "Tamaño del array: ".sizeof($X);
    echo "\n";
 
    //$X = array_diff($X, array('20'));
    unset($X[2]);
    sort($X);
   print_r($X);
    
    echo "\n";
    echo "\n";
    echo "Tamaño del array: ".sizeof($X)."\n";



    
    ?>
