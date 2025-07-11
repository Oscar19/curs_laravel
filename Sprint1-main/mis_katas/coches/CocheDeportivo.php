<?php 
/* 
Crear una clase CocheDeportivo que extienda Coche:
        Propiedad adicional: velocidadMaxima.
        Implementar los métodos abstractos.
*/
 require_once("Coche.php");
    class CocheDeportivo extends Coche1{
        private $velocidadMaxima;

        public function __construct($marca, $modelo, $precio, $velocidadMaxima){
            parent::__construct($marca, $modelo, $precio);
            $this->velocidadMaxima=$velocidadMaxima;
        }
        public function getVelocidadMaxima(){
            return $this->velocidadMaxima;
        }
        public function arrancar(){
            return "El coche deportivo ". $this->getMarca() . " ". $this->getModelo() ." está arrancando";
        }
        public function detener(){
            return "El coche deportivo ". $this->getMarca() . " ". $this->getModelo() ." está detenido";
        }
    }
?>