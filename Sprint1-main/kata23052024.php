<?php
    $num = readline("Escribe un número: \n");
    $file = fopen( "calculs_".$num.".txt","a");
  function factorial($num){
    $factorial = 1;
    for($i = 1; $i < $num; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial." Es el factorial del número ". $num."\n"; 
  }
  function cubo($num){
    $cubo = $num * $num * $num;
    return $cubo." Es el cubo ".$num ."\n";
  }
  function cuadrado( $num){
    $cuadrado = $num * $num;
    return $cuadrado ." Es el cuadrado ".$num."\n";
  }

  $texto = cuadrado($num)."".cubo($num)."".factorial($num);
  fwrite( $file, $texto);
  fclose($file);
  

  
  


?>