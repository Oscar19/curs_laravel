<?php 
  include_once("entrega.php");
  $entrega1 = new Entrega("oscar", Sprint::php, 2, "12/05/2024");
  $entrega2 = new Entrega("sergio", Sprint::bbdd, 6, "12/04/2024");
  $entrega3 = new Entrega("xavi", Sprint::laravelMvc, 2, "12/06/2024");
  $entrega4 = new Entrega("jose", Sprint::patrones, 4, "12/04/2024");

  $entregas = array($entrega1, $entrega2, $entrega3, $entrega4);

 // var_dump($entregas);
  
  $maxAlumno = null;
  $sumaTotal = 0;
    foreach($entregas as $entrega){ 
        $total = $entrega->cantidadCorregir();
        $sumaTotal += $total;
        if($maxAlumno === null || $entrega->cantidadCorregir() > $maxAlumno->cantidadCorregir()){
            $maxAlumno = $entrega;
        }
        echo "Entregas a corregir de: ". $entrega->getSprint(). " ". $entrega->cantidadCorregir(). "\n";
        echo "\n";
    }
   
    echo "la cantidad de entregas totales a corregir es de: " . $sumaTotal ."\n";
    echo "\n";
    echo "El alumno ". $maxAlumno->getNombre(). " es el que mas entregas ha realizado, con un número de: ". $maxAlumno->cantidadCorregir()."\n";

?>