<?php 
echo "Primeara manera \n";
    $i=1;
    while($i < 10){
       echo $i++."\n";
    }
    echo "Segunda manera \n";
    $num = array(1,2,3,4,5,6,7,8,9,10);
    foreach ($num as $numero) {
        echo $numero . "\n";
    }
    echo "Tercera manera\n";
    echo "1 2 3 4 5 6 7 8 9 10 \n"; 

    echo "Cuarta manera\n";
    for($i = 0; $i < 10; $i++){
        echo $i + 1 ."\n";
    }
    echo "Quinta manera\n";
    $range = range(1,10);
    foreach($range as $numero){
        echo $numero."\n";
    }
?>