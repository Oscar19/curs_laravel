<?php 
    class Compte{
        protected $numCompte;
        protected $saldo;

        public function __construct($numCompte, $saldo){
            $this->numCompte = $numCompte;
            $this->saldo = $saldo;
        }
        public function Ingressar($quantitat){
            $this->saldo += $quantitat;
        }
        public function Retirar($quantitat){
            if ($this->saldo >= $quantitat){
                $this->saldo -= $quantitat;
                return true;
            }
            return false;
        }
    }

?>