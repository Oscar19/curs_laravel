<?php /*Clase CocheHibrido (hereda de Coche):

Atributos:
    capacidadBateria (en kWh)
    capacidadDeposito (en litros)
Métodos:
    cargarBateria(): Devuelve un mensaje indicando que la batería se está cargando.
    llenarDeposito(): Devuelve un mensaje indicando que el depósito de combustible se está llenando.
    Implementar el método mostrarDetalles() para incluir la capacidad de la batería y del depósito.*/ 
    require_once("Coche.php");
    class Hibrido extends Coche{
        private $capacidadBateria;
        private $capacidadDeposito;
        public function __construct($marca, $modelo, $anio, $precio, $capacidadBateria, $capacidadDeposito)
        {
        parent::__construct($marca, $modelo, $anio, $precio);
        $this->capacidadBateria = $capacidadBateria;
        $this->capacidadDeposito = $capacidadDeposito;
        }
        public function cargarBateria(){
            return "El coche de ma marca ". $this->marca . " ". " modelo ". $this->modelo. " tiene la bateria cargada";
        }
        public function llenarDeposito(){
            return "El coche de ma marca ". $this->marca . " ". " modelo ". $this->modelo. " tiene el deposito lleno";
        }
        public function mostrarDetalles(){
            return "Marca: {$this->marca}, Modelo: {$this->modelo}, Año: {$this->anio}, Precio: \${$this->precio}, capacidad bateria: {$this->capacidadBateria} km, capacidad deposito: {$this->capacidadDeposito}";

        }
        public function Encender(){

        }
        public function Apagar()
        {
            
        }
        
    }
    ?>