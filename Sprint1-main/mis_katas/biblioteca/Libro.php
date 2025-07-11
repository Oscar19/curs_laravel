<?php 
    /* Crear una clase Libro que extienda MaterialBiblioteca:
        Propiedad adicional: numeroPaginas.
        Implementar el método getTipo().*/
        require_once("MaterialBiblioteca.php");
        class Libro extends MaterialBiblioteca{

            private $numeroPaginas;

            public function __construct($titulo, $autor, $anioPublicacion, $numeroPaginas){
                parent::__construct($titulo, $autor, $anioPublicacion);
                $this->numeroPaginas = $numeroPaginas;

            }
            public function getNumeroPaginas()
            {
                return $this->numeroPaginas;
            }
            public function getTipo(){
                return "Libro";
            }
        }
?>