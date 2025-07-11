<?php 
    class cogerCartera{
        public function Cartera(){
            echo "He recogido la cartera\n";
        }
    }
    class cogerLLaves{
        public function LLaves(){
            echo "He cogido las llaves\n";
        }
    }
    class cogerLLavesCoche{
        public function llavesCoche(){
            echo "He cogido las llaves del coche\n";
        }
    }
    class cogerSmartphone{
        public function smartPhone(){
            echo "He cogido el móvil\n";
        }
    }
    class SalirCasa{
        private $cartera;
        private $llaves;
        private $llavescoche;
        private $smartphone;

        public function __construct(cogerCartera $cartera, cogerLLaves $llaves, cogerLLavesCoche $llavescoche,cogerSmartphone $smartphone)
        {
            $this->cartera = $cartera;
            $this->llaves = $llaves;
            $this->llavescoche = $llavescoche;
            $this->smartphone = $smartphone;

        }
        /*public function setCartera(cogerCartera $cartera){
            $this->cartera = $cartera;
        }
        public function setLLaves(cogerLLaves $llaves){
            $this->llaves = $llaves;
        }
        public function setLLavesCoche(cogerLLavesCoche $llavescoche){
            $this->llavescoche = $llavescoche;
        }
        public function setSmarphone(cogerSmartphone $smartphone){
            $this->smartphone = $smartphone;
        }*/
        public function repaso(){
            return "Para salir: ". $this->cartera->Cartera()." ". $this->llaves->LLaves()." ". $this->llavescoche->llavesCoche(). " ". $this->smartphone->smartPhone()."\n";
        }
    }
    $cartera = new cogerCartera();
    $llaves = new cogerLLaves();
    $llavesCoche = new cogerLLavesCoche();
    $smartphone = new cogerSmartphone();

    $salirdeCasa = new SalirCasa($cartera, $llaves, $llavesCoche,$smartphone);
    

    $salirdeCasa->repaso();
   
?>