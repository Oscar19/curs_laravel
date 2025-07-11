<?php 
/*Crear una clase Revista que extienda MaterialBiblioteca:
        Propiedad adicional: numeroEdicion.
        Implementar el método getTipo(). */
        require_once("MaterialBiblioteca.php");
        class Revista extends MaterialBiblioteca{
            private $numeroEdicion;

            public function __construct($titulo, $autor, $anioPublicacion, $numeroEdicion)
            {
                parent::__construct($titulo, $autor, $anioPublicacion);
                $this->numeroEdicion = $numeroEdicion;
            }
            public function getNumeroEdicion(){
                return $this->numeroEdicion;
            }
            public function getTipo(){
                return "Revista";
            }
        }
?>