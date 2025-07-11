<?php 
    class Pelicula{
        private $titol;
        private $duracio;
        private $autor;

        public function __construct($titol, $duracio, $autor){
            $this->titol = $titol;
            $this->duracio = $duracio;
            $this->autor = $autor;
        }
        public function getTitol(){
            return $this->titol;
        }
        public function getduracio(){
            return $this->duracio;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function __toString()
        {
            return "Títol: ". $this->getTitol(). " Autor: ". $this->getAutor()." Duració: ". $this->getduracio()."\n";
        }
    }
?>