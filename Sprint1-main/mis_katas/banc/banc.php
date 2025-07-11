<?php 
//crear client, eliminar client, afegir diners, retirar diners

include_once("client.php");
include_once("cuenta.php");
class Banc {
    private $clients;

    public function __construct() {
        $this->clients = array();
    }

    public function crearClient($dni, $nom) {
        if (!isset($this->clients[$dni])) {
            $this->clients[$dni] = new Client($dni, $nom);
            echo "Client creat.\n";
        } else {
            echo "El client ja existeix.\n";
        }
    }

    public function eliminarClient($dni) {
        if (isset($this->clients[$dni])) {
            unset($this->clients[$dni]);
            echo "Client eliminat.\n";
        } else {
            echo "El client no existeix.\n";
        }
    }

    public function crearCompte($dni, $numCompte) {
        if (isset($this->clients[$dni])) {
            $compte = new Compte($numCompte, 0);
            $this->clients[$dni]->afegirCompte($compte);
            echo "Compte creat.\n";
        } else {
            echo "El client no existeix.\n";
        }
    }

    public function ingressar($dni, $numCompte, $quantitat) {
        if (isset($this->clients[$dni])) {
            $client = $this->clients[$dni];
            foreach ($client->getComptes() as $compte) {
                if ($compte->getNumero() == $numCompte) {
                    $compte->ingressar($quantitat);
                    echo "Ingressats $quantitat € al compte $numCompte.\n";
                    return;
                }
            }
            echo "Compte no trobat.\n";
        } else {
            echo "El client no existeix.\n";
        }
    }

    public function retirar($dni, $numCompte, $quantitat) {
        if (isset($this->clients[$dni])) {
            $client = $this->clients[$dni];
            foreach ($client->getComptes() as $compte) {
                if ($compte->getNumero() == $numCompte) {
                    if ($compte->retirar($quantitat)) {
                        echo "Retirats $quantitat € del compte $numCompte.\n";
                    } else {
                        echo "Saldo insuficient.\n";
                    }
                    return;
                }
            }
            echo "Compte no trobat.\n";
        } else {
            echo "El client no existeix.\n";
        }
    }
}
?>


