<? 
/*Clase CocheElectrico (hereda de Coche):

    Atributos:
        autonomia (en kilómetros)
    Métodos:
        cargarBateria(): Devuelve un mensaje indicando que la batería se está cargando.
        Implementar el método mostrarDetalles() para incluir la autonomía.*/
require_once("Coche.php");
class Electrico extends Coche{
    private $autonomia;
    public function __construct($marca, $modelo, $anio, $precio, $autonomia)
    {
        parent::__construct($marca, $modelo, $anio, $precio);
        $this->autonomia = $autonomia;
    }
    public function  cargarBateria(){
        return "El coche de ma marca ". $this->marca . " ". " modelo ". $this->modelo. " está cargando";

    }
    public function mostrarDetalles(){
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Año: {$this->anio}, Precio: \${$this->precio}, Autonomía: {$this->autonomia} km";
    }
}
?>