<?php

    /**
     * Summary of leerDatos
     * Recogemos los datos del usuario para poder trabajarlos
     * @return array<float|int>[]
     */
    function leerDatos(){
        $fecha1 = array();
        $fecha2 = array();
        for( $i = 0; $i <= 1; $i++){
            echo "Escoge la primera fecha ". $i +1 ." \n";
            $dia = readline("Dia: \n");
            $mes = readline("Mes (En numero): \n");
            $anio = readline("Año (ejem: 2024): ");

            if(is_numeric($dia) && is_numeric($mes) && is_numeric($anio) && $dia > 0 && $dia <= 31 && $mes > 0 && $mes <= 12 && $anio > 0){
               
                if($i == 0){
                    $fecha1 = array("dia" => $dia, "mes" => $mes, "anio" => $anio);
                }
                else{
                    $fecha2 = array("dia" => $dia, "mes" => $mes, "anio" => $anio);
                }
            }
            else{
                echo "La fecha no es válida";
                $i--;
            }
        }
        return array($fecha1, $fecha2);
      }
      list($fecha1, $fecha2) = leerDatos();
     // print_r($fecha1);
      /**
       * Summary of anioBIsiesto
       * Saber si el año escogido es bisiesto
       * @param mixed $anio
       * @return bool
       */
      function anioBIsiesto($anio){
        return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
      }
      /**
       * Summary of calcularDiasBisiestos
       * Calcular los dias con años bisiestos hasta el año 0
       * @param mixed $anio
       * @return int
       */
      function calcularDiasBisiestos($anio){
        $count = 0;
        for ($i = 0; $i >= $anio; $i++){
            if(($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)){
                $count++;
            }
        }
        return $count;
      }
      /**
       * Summary of diasJisuscrist
       * Calcular desde el dato anio los dias que hay hasta el año cero
       * @param mixed $anio
       * @return float
       */
      function diasJisuscrist($anio){
        $diasAnioCero = ($anio - 1) * 365;
        $bisiestos = calcularDiasBisiestos($anio);
        $diasdelosTiempos = $diasAnioCero + $bisiestos;

        return $diasdelosTiempos;
      }

      /**
       * Summary of desdeAnionuevo
       * Calcular los dias que hay hasta año nuevo
       * @param mixed $mes
       * @param mixed $anio
       * @return int
       */
      function desdeAnionuevo($mes, $anio){
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
      
      // hacer una funcion donde se recoge cada una de las fechas y se calcula la diferencia
      function calcularDiferencia($fecha1, $fecha2){
        $dias1 = desdeAnionuevo($fecha1["anio"], $fecha1["mes"]);
        $dias2 = desdeAnionuevo($fecha2["anio"], $fecha2["mes"]);
      }
      
?>
