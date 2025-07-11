<? 
require_once("tipocombustible.php");
    class Coche{
        private $marca;
        private $cilindrada;
        private $matricula;
        private $color;
        private TipoCombustible $tipocombustible;

        public function __construct($marca, $cilindrada, $matricula, $color, TipoCombustible $tipocombustible){
            $this->marca = $marca;
            $this->cilindrada = $cilindrada;
            $this->matricula = $matricula;
            $this->color = $color;
            $this->tipocombustible = $tipocombustible;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getCilindrada(){
            return $this->cilindrada;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function getColor(){
            return $this->color;
        }
        public function getCombustible(){
            return $this->tipocombustible;
        }
    }
    ?>