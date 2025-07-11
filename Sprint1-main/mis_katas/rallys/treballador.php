<?php 
    /* De les persones treballadores de les diferents escuderies volen saber el nom, 
    el primer cognom, l’edat, el temps que porten a l’escuderia i el sou. 
    El sou base és de 50.000 €. A més, dels/les pilots volen saber la seva alçada, 
    el pes. El sou dels/les pilots és el sou base de les persones treballadores més 10.000 € 
    per cada any d’antiguitat a l’escuderia, més 50.000 € de perillositat. 

Dels/les mecànics volen saber si tenen estudis superiors de mecànica o no. 
I el seu sou es calcula sumant 10.000 € per cada any d’antiguitat a l’escuderia més el sou base. */

abstract class Treballador{
    protected $nom;
    protected $cognom;
    protected $edat;
    protected $temps;
    
    public function __construct($nom, $cognom, $edat, $temps){
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->edat = $edat;
        $this->temps = $temps;
        
    }
    abstract public function calcularSou();
}


?>