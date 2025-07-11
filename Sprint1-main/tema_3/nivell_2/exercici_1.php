
    <?php 
        $array1 = array(1,2,3,4,5);
        $array2 = array(5,3,6,7,9);
        //$arrayTot = array_merge($array1, $array2);
        echo "<pre>";
        echo "Repetidos";
        echo "<pre>";
        $repetidos = array_intersect($array1,$array2);
        //var_dump($repetidos);
        print_r($repetidos);
        echo "<pre>";
        $arrayTot = array_merge($array1, $array2);
        echo "<pre>";
        echo "Juntar arrays";
        echo "<pre>";
        print_r($arrayTot);
        

    ?>
 