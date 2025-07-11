<?php 
    /*  Define tres arrays de 20 números enteros cada una, con nombres "numero",cuadrado"
            y "cubo". Carga el array "numero" con valores aleatorios entre 0 y 100. En el array
            "cuadrado" se deben almacenar los cuadrados de los valores que hay en el array "numero".
            En el array "cubo" se deben almacenar los cubos de los valores que hay en "numero".
            A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas.*/

    for ($i = 0; $i < 20; $i++) {
        $num[] = rand(0,100) ;
    }
   foreach ($num as $elemento) {
    $cuadrado[] = $elemento * $elemento;
    $cubo[] = $elemento*$elemento*$elemento;
   }
   echo "Num cuadrado cubo \n";
   for ($i = 0; $i < 20; $i++) {
   
    echo " ".$num[$i]." ";
    echo " ".$cuadrado[$i]." ";
    echo " ".$cubo[$i]." \n";
}
?>