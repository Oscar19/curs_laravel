<?php 
    /* Cada escuderia pot tenir més d’un cotxe i de cadascun volen saber la potència, la velocitat màxima, 
  el color i el preu de mercat. */
  class Monoplaza{
    private $potencia;
    private $maxVelocity;
    private $color;
    private $preuMercat;

    public function __construct($potencia, $maxVelocity, $color, $preuMercat)
    {
        $this->potencia = $potencia;
        $this->maxVelocity = $maxVelocity;
        $this->color = $color;
        $this->preuMercat = $preuMercat;
    }
    
    public function mostrarMonoplaza(){
        echo "Potencia: ".$this->potencia.", Velocitat Maxima: ".$this->maxVelocity.", Color: ".$this->color.", Preu de Mercat: ".$this->preuMercat."\n";
    }
  }
?>