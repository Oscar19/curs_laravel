<?php 
/* Definir una clase abstracta MaterialBiblioteca:
        Propiedades: titulo, autor, anioPublicacion.
        Métodos abstractos: getTipo().
        Métodos comunes: getTitulo(), getAutor(), getAnioPublicacion().*/
    abstract class MaterialBiblioteca{
        private $titulo;
        private $autor;
        private $anioPublicacion;

        public function __construct($titulo, $autor, $anioPublicacion){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->anioPublicacion = $anioPublicacion;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function getAnioPublicacion(){ 
            return $this->anioPublicacion;
        }
        abstract public function getTipo();
    }
?>