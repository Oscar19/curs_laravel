<?php 
    class Hechizo{
        private $nombre;
        private $poder;

        public function __construct($nombre, $poder) {
            $this->nombre = $nombre;
            $this->poder = $poder;
        }
    
        public function mostrarHechizo() {
            return "Hechizo: $this->nombre, Poder: $this->poder";
        }
    }
    
?>