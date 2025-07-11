<?php 
    /* 
    Implementa una classe Car que tingui informació sobre un cotxe 
    (marca, matrícula, tipus de combustible, velocitat màxima). A més, 
    implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un 
    missatge “S’ha iniciat el turbo”. Usa aquest mètode des de la classe Car. 
    */
    require_once("turbo.php");
    class Car{
        use Turbo;

        protected $marca;
        protected $matricula;
        protected $tipusConbustible;
        protected $velocitatMaxima;

        
        function __construct($marca, $matricula, $tipusConbustible, $velocitatMaxima){
            $this->marca = $marca;
            $this->matricula = $matricula;
            $this->tipusConbustible = $tipusConbustible;
            $this->velocitatMaxima = $velocitatMaxima;

        }
      
    }
?>