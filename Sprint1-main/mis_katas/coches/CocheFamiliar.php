<?php 
    /* Crear una clase CocheFamiliar que extienda Coche:
        Propiedad adicional: numeroAsientos.
        Implementar los métodos abstractos.
        */
        require_once("Coche.php");
        class CocheFamiliar extends Coche1 {
            private $numreroAsientos;

            public function __construct($marca, $modelo, $precio, $numreroAsientos) {
                parent::__construct($marca, $modelo, $precio);
                $this->numreroAsientos = (int)$numreroAsientos;
            }
            public function getNumeroAsientos() {
                return $this->numreroAsientos;
            }
            public function arrancar(){
                return "El coche familiar ". $this->getMarca() . " ". $this->getModelo() ." está arrancando";
            }
            public function detener(){
                return "El coche familiar ". $this->getMarca() . " ". $this->getModelo() ." está detenido";
            }
        }
?>