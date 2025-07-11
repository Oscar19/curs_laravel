<?php 
    /*Vas a crear un sistema básico para manejar personajes de un videojuego. 
    Habrá varios tipos de personajes (guerreros y magos) que heredarán de una clase base llamada Personaje. 
    Cada tipo de personaje tendrá atributos y métodos específicos, 
    además de los atributos y métodos comunes que estarán en la clase base.*/
    abstract class Personaje{
        protected $nombre;
        protected $nivel;
        protected $salud;
      

        public function __construct($nombre, $nivel, $salud)
        {
            $this->nombre = $nombre;
            $this->nivel = $nivel;
            $this->salud = $salud;
        }
        abstract public function MostrarInfo();
        abstract public function Atacar();
        abstract public function recibirDanio();

    }
?>