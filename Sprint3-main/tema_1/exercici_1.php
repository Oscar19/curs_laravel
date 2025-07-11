<?php 

    class Tigger {
        private static $instance = null;
        private $count = 0;
        private function __construct() {
                echo "Building character..." . PHP_EOL;
        }
        public static function getInstance(){
            //comprobamos que $instance sea null, si es así creamos la instancia
            if(!self::$instance){
                self::$instance = new self();
            }
            return self::$instance;
        }
        public function getCount(){
            return $this->count;
        }
        
        public function roar() {
                echo "Grrr!" . PHP_EOL;
                $this->count++;
        }
 
 }
 // llamamos a la instancia y la imprimimos
 $tigger = Tigger::getInstance();
 $num = readline("Cuantas veces quieres haga el rugido: ");

    for( $i = 0; $i < $num; $i++){
        $tigger->roar();
    }

 // contamos cuantas veces se ha impreso
 echo $tigger->getCount(). " veces\n";

 // miramos de ver si se crea una nueva instancia o se mantiene la misma
 $tigger2 = Tigger::getInstance();

 $tigger2->roar();

 echo $tigger2->getCount(). " veces\n";
 //comprobar que sea la misma instancia
 var_dump($tigger === $tigger2);
?>