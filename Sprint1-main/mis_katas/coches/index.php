<?php 

/* Objetivo:

Crear un sistema que gestione diferentes tipos de coches, permitiendo realizar las siguientes operaciones:

    Definir una clase abstracta Coche:
        Propiedades: marca, modelo, precio.
        Métodos abstractos: arrancar(), detener().
        Métodos comunes: getMarca(), getModelo(), getPrecio(), setPrecio($nuevoPrecio).

    Crear una clase CocheDeportivo que extienda Coche:
        Propiedad adicional: velocidadMaxima.
        Implementar los métodos abstractos.

    Crear una clase CocheFamiliar que extienda Coche:
        Propiedad adicional: numeroAsientos.
        Implementar los métodos abstractos.

    Crear un archivo index.php para crear instancias de coches, arrancar y detener coches, y mostrar su información.

*/
require_once("CocheDeportivo.php");
require_once("CocheFamiliar.php");

$coche1 = new CocheDeportivo("Porsche","911", 120000, 300);
$coche2 = new CocheFamiliar("Subaru", "Outback", 35000, 7);

echo "Informacion coche deportivo \n";
echo "Marca: ". $coche1->getMarca(). "\n";
echo "Modelo: ". $coche1->getModelo(). "\n";
echo "Precio: ". $coche1->getPrecio(). "\n";
echo "Velocidad: ". $coche1->getVelocidadMaxima(). "\n";
echo "Estado: ". $coche1->arrancar(). "\n";

echo "\n";

echo "Informacion coche familiar \n";
echo "Marca: ". $coche2->getMarca(). "\n";
echo "Modelo: ". $coche2->getModelo(). "\n";
echo "Precio: ". $coche2->getPrecio(). "\n";
echo "Número de asientos: ". $coche2->getNumeroAsientos(). "\n";
echo "Estado: ". $coche2->detener(). "\n";
?>