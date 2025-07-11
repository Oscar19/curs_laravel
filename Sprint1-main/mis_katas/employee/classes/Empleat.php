<?php 
    /* 
    Crea una classe Employee, defineix com a atributs el seu nom i sou. 
    Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
    Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos 
    (si el sou supera 6000, paga impostos).
    */
    class Empleat{
        public $nom;
        public $sou;

        public function inicialize($nom, $sou){
            $this->nom = $nom;
            $this->sou = $sou;
        }

        function impostos(){
            if ($this->sou >6000){
                echo "ha de pagar impostos";
            }
            else{
                echo "No ha de pagar impostos";
            }
        }
    }
?>