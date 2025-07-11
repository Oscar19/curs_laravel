<?php 
    require_once("personaje.php");
    require_once("hechizo.php");
    class Mago extends Personaje{
        private $mana;
        private $hechizo;
        public function __construct($nombre, $nivel, $salud, $mana, $hechizo)
        {
            parent::__construct($nombre, $nivel, $salud);
            $this->mana = $mana;
            $this->hechizo = $hechizo;
        }
        public function LanzarHechizo(){
            echo $this->nombre ." realiza un  ".$this->hechizo->mostrarHechizo()." \n";
        }
        public function MostrarInfo()
        {
            echo "$this->nombre es un mago de $this->nivel de nivel, su salud inicial es de $this->salud , y tiene un nivel de mana de $this->mana \n";
            echo "Su armas es ".$this->hechizo->mostrarHechizo(). ".\n";
        }
        public function Atacar(){
            return $this->mana;
       }
        public function recibirDanio(){

            $this->salud - $this->Atacar();
            if ($this->salud < 0){
                $this->salud = 0;
            }
            echo $this->nombre ." ahora tiene ". $this->salud;
           }
    }
?>