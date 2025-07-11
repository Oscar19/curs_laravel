<?php 
    class Arma{
        private $nombre;
        private $danio;
        public function __construct($nombre, $danio)
        {
            $this->nombre = $nombre;
            $this->danio = $danio;
        }
        public function mostrarArma(){
            return "Arma: $this->nombre, Daño: $this->danio";
        }
        public function getDanio(){
            return $this->danio;
        }
    }
?>