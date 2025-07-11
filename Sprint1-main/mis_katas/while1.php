<?php 
/* 
Crear un script en PHP que cuente los primeros N números pares positivos y los almacene en un array. Luego, mostrar estos números en la pantalla.
Especificaciones:

    Solicitar al usuario un número entero positivo N.
    Utilizar un bucle while para encontrar los primeros N números pares positivos.
    Almacenar estos números en un array.
    Mostrar los números pares en la pantalla.

Pasos:

    Solicitar al usuario el número N.
    Inicializar el contador y el número actual.
    Utilizar el bucle while para encontrar los números pares.
    Almacenar los números pares en un array.
    Mostrar los números pares.*/
  
// Solicitar al usuario un número entero positivo N
echo "Ingrese un número entero positivo: ";
$handle = fopen("php://stdin", "r");
$input = fgets($handle);
$N = intval($input);

// Verificar que N sea un número entero positivo
if ($N <= 0) {
    echo "Por favor, ingrese un número entero positivo.";
    exit();
}

// Inicializar el contador y el número actual
$contador = 0;
$numeroActual = 1;
$numerosPares = [];

// Utilizar un bucle while para encontrar los primeros N números pares positivos
while ($contador < $N) {
    if ($numeroActual % 2 == 0) {
        $numerosPares[] = $numeroActual;
        $contador++;
    }
    $numeroActual++;
}

// Mostrar los números pares
echo "Los primeros $N números pares positivos son: \n";
foreach ($numerosPares as $numero) {
    echo $numero . "\n";
}


?>