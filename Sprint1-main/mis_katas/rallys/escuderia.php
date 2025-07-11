<?php 

    /*  L'organització d’un campionat de cotxes vol tenir un programa per gestionar part de 
  la informació que fins ara no tenien informatitzada. Volen saber de cada escuderia que 
  participa en el campionat, el nom, el pressupost que tenen i el país d’origen. 
  Cada escuderia pot tenir més d’un cotxe i de cadascun volen saber la potència, la velocitat màxima, 
  el color i el preu de mercat. */

    class Escuderia{
        protected $nombre;
        protected $presupuesto;
        protected $pais;
        protected $monoplazas = array();

        public function __construct($nombre, $presupuesto, $pais){
          $this->nombre = $nombre;
          $this->presupuesto = $presupuesto;
          $this->pais = $pais;
        }
        public function addMonoplaza($monoplazas){
          $this->monoplazas[] = $monoplazas;
        }
        public function mostrarMonoplaza(){
          foreach($this->monoplazas as $monoplaza){
            $monoplaza->mostrarMonoplaza();
          }
        }
    }

?>