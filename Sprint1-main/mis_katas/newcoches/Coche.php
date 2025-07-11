<?php 
    /* 
    Clase Coche (Clase base):

    Atributos:
        marca
        modelo
        año
        precio
    Métodos:
        encender(): Devuelve un mensaje indicando que el coche está encendido.
        apagar(): Devuelve un mensaje indicando que el coche está apagado.
        mostrarDetalles(): Devuelve los detalles del coche.*/
        require_once("vehiculo.php");

    abstract class Coche{
        protected $marca;
        protected $modelo;
        protected $anio;
        protected $precio;

        public function __construct($marca, $modelo, $anio, $precio){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->anio = $anio;
            $this->precio = $precio;

        }
        public function encender(){
            return "El coche de ma marca ". $this->marca . " ". " modelo ". $this->modelo. " está encendido";

        }
        public function apagar(){
            return "El coche de ma marca ". $this->marca . " ". " modelo ". $this->modelo. " está apagado";
        }
        abstract public function mostrarDetalles();

        function mover() {
            return "El coche {$this->marca} {$this->modelo} está en movimiento.";
        }
       

    }
    
?>