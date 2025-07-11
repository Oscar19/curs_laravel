<?php 

  function leerDatos(){
    echo "Escoge la primera fecha \n";
    $dia1 = readline("Dia: \n");
    $mes1 = readline("Mes (En numero): \n");
    $anio1 = readline("Año (ejem: 2024): ");
  
    echo "Escoge la segunda fecha \n";
    $dia2 = readline("Dia: \n");
    $mes2 = readline("Mes (En numero): \n");
    $anio2 = readline("Año (ejem: 2024): ");
  }


//primera forma
    $fecha = new DateTime("$anio1-$mes1-$dia1");
    $fecha1 = new DateTime("$anio2-$mes2-$dia2");
    echo "La fecha es: " . $fecha->format('Y-m-d') . "\n";
    echo "La fecha es: " . $fecha1->format('Y-m-d') . "\n";

    /*function validarDia($dia, $mes){
      $diasMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
      if ($mes < 1 || $mes > 12) {
        return false;
    }
      if ($dia < 1 || $dia > $diasMes[$mes - 1]) {
        return false;
    }
    return true;
  }*/

    $diferencia = $fecha->diff($fecha1);

    echo "diferencia: ". $diferencia->format('%R%a dias')." \n";


    // modo molon

    function bisiesto($anio) {
      return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
  }
  function calcularDiasBisiestos($anio) {
    $count = 0;
    for ($i = 0; $i <= $anio; $i++) {
        if (($i % 4 == 0 && $i % 100 != 0) || ($i % 400 == 0)) {
            $count++;
        }
    }
    return $count;
  }
   function diasJisuscrist($anioNew){
     $diasAnioCero = ($anioNew -1) * 365;
     $bisisestos = calcularDiasBisiestos($anioNew);
     $diasdelosTiempos = $diasAnioCero + $bisisestos;
     return $diasdelosTiempos;
    }
    function desdeAnionuevo($mes, $anio) {
      $diasMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
      if (bisiesto($anio)) {
        $diasMes[1] = 29;
    }
  
      $dias = 0;
      for ($i = 0; $i < $mes - 1; $i++) {
          $dias += $diasMes[$i];
      }
      
      return $dias;
  }
  
  function calcularAnioCero($dias, $meses, $anios){
    $hastaJisusCrist = $dias + $meses + $anios;
    return $hastaJisusCrist;
  }
  
  $diasdelosTiempos1 = diasJisuscrist($anio1);
  $diasdelosTiempos2 = diasJisuscrist($anio2);
  $diasMes1 = desdeAnionuevo($mes1, $anio1);
  $diasMes2 = desdeAnionuevo($mes2, $anio2);

  $iniciodelostiempos1 = calcularAnioCero($dia1, $diasMes1, $diasdelosTiempos1);
  $iniciodelostiempos2 = calcularAnioCero($dia2, $diasMes2, $diasdelosTiempos2,);

  $diferencia = $iniciodelostiempos1 - $iniciodelostiempos2;

  echo "la diferencia de dias es de: " .$diferencia . " dias segunda manera \n";




  

    // pasar las fechas al año 0
    // en este caso 2023 para atras año -1 *365 + meses hasta enero + dias hasta el 1








  




?>
