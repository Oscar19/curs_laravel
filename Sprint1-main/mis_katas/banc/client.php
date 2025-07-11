<?php 
class Client{
    private $dni;
    private $nom;
    private $comptes;

    public function __construct($dni, $nom) {
        $this->dni = $dni;
        $this->nom = $nom;
        $this->comptes = array();
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNom() {
        return $this->nom;
    }

    public function afegirCompte($compte) {
        $this->comptes[] = $compte;
    }

    public function eliminarCompte($compte) {
        if (($key = array_search($compte, $this->comptes)) !== false) {
            unset($this->comptes[$key]);
        }
    }

    public function getComptes() {
        return $this->comptes;
    }
}
   

?>