<?php 
    /*

Crea una petita estructura que representi l'informació d'un marcador de tenis(en un partit ja acabat) al millor de 5 sets. L'estructura ha de registrar:

    El nom dels dos jugadors/es.
    El marcador de cada set(només els jocs, no els punts de cada joc)

A més, necessitarem programar els següents processos:

    Mostrar/retornar el marcador sencer del partit.
    Mostrar/retornar el guanyador/a del partit.
    Mostrar/retornar el set amb major diferència de jocs.
*/

class PartidoTennis{
    private $jugador1;
    private $jugador2;
    private $marcadors;
    public function __construct($jugador1, $jugador2, $marcadors) {
        $this->jugador1 = $jugador1;
        $this->jugador2 = $jugador2;
        $this->marcadors = $marcadors;
    }
    
    public function mostrarMarcador() {
       
        echo "$this->jugador1: ";
        foreach ($this->marcadors as $marcador) {
            
            echo "| {$marcador[0]} "; 
        }
        echo "|\n";

        echo "$this->jugador2: ";
        foreach ($this->marcadors as $marcador) {
            echo "| {$marcador[1]} "; 
        }
        echo "|\n";
        echo "\n";
    }
    public function guanyador(){
        $setsJugador1 = 0;
        $setsJugador2 = 0;
        foreach ($this->marcadors as $sert =>$marcador){
            $resultatSet = $marcador[0] - $marcador[1];
            if ($resultatSet < 0){
                $setsJugador1++; 
            }
            else{       
                $setsJugador2++;  
            }
       
        }
        //echo "el jugador 2 ha guanyat ".$setsJugador1." sets\n";
        //echo "el jugador 1 ha guanyat ".$setsJugador2." sets\n";
        $guanyador = $setsJugador1 - $setsJugador2;
        if($guanyador < 0){
            echo "El guanyador es el jugador1\n";
        }
        else{
            echo "El guanyador es el jugador2\n";
        }
        
    }
    public function diferenciaMax() {
        $mayorDiferencia = 0;

        foreach ($this->marcadors as $puntos => $marcador) {
            $diferencia = abs($marcador[0] - $marcador[1]); 
            if ($diferencia > $mayorDiferencia) {
                $mayorDiferencia = $diferencia;
                $juegoConMayorDiferencia = $puntos;
            }
        }

        echo "La diferencia més gran es la del joc: " . ($juegoConMayorDiferencia + 1) . " amb una diferència de " . $mayorDiferencia . " jocs\n";        
    }
    
}
$marcadors = [
    [6, 4], 
    [3, 6], 
    [7, 5], 
    [2, 6], 
    [3, 5]  
];
$partit = new PartidoTennis("Jugador1", "Jugador2", $marcadors);
$partit->mostrarMarcador();
$partit->guanyador();
$partit->diferenciaMax();
?>