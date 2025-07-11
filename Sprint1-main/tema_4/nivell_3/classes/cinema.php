<?php 
    /* 
    Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. 
    Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. 
    Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

    Per a cada cinema, mostrar les dades de cada pel·lícula.
    Per a cada cinema, mostrar la pel·lícula amb major duració.
    Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. 
    No cal repetir pel·lícules.

A més, pots aprofitar aquest exercici per treballar una bona presentació 
amb HTML+CSS que doni suport a la lògica. 
    */
    require_once("pelicula.php");
    class Cinema{
        private $nom;
        private $poblacio;
        private $llistaPelicules;

        public function __construct($nom, $poblacio, $llista){
            $this->nom = $nom;
            $this->poblacio = $poblacio;
            $this->llistaPelicules = [];
        }
        public function getNom(){
            return $this->nom;
        }
        public function getPoblacio(){
            return $this->poblacio;
        }
        public function getPelicules(){
            return $this->llistaPelicules;
        }
        
        // afegir pelicula
        public function addPelicula(Pelicula $pelicula){
            $this->llistaPelicules[] = $pelicula;
        }

        //mostrar cartelera
        public function mostrarCartelera(){
            $cartelera = "";
            foreach($this->llistaPelicules as $pelicula){
                $cartelera.= $pelicula->__toString();
            }

        }
      /* public function __toString(Pelicula $pelicula)
       {
        return $this->getTitol();
       }*/

    }
?>