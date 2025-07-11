<?php 


require_once("personaje.php");
require_once("arma.php");

class Guerrero extends Personaje {
    private $fuerza;
    private $arma;

    public function __construct($nombre, $nivel, $salud, $fuerza, $arma) {
        parent::__construct($nombre, $nivel, $salud);
        $this->fuerza = $fuerza;
        $this->arma = $arma;
    }

    /*public function AtaqueFisico() {
        echo "$this->nombre realiza un ataque físico con " . $this->arma->mostrarArma() . ".\n";
    }*/

    public function MostrarInfo() {
        echo "$this->nombre es un guerrero de nivel $this->nivel, su salud inicial es de $this->salud, y tiene un nivel de fuerza de $this->fuerza. ";
        echo "Su arma es " . $this->arma->mostrarArma() . ".\n";
    }
   public function Atacar(){
        return $this->fuerza;
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


