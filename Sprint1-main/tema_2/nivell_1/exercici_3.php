<?php 
$exercici = "Ejercicio 3";
echo "<h1>" . $exercici . "</h1>";
echo "<br><br>";
echo "<h4>Ejercicio 3 A</h4>";
$x = 17;
$y = 7;
$n = 5.5;
$m = 8.2;
echo "La variable x es ". $x . ", la variable y es ". $y;
echo "\n";

$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;
$modulo = $x & $y;

echo "\n";
echo "La suma de " . $x . " + " . $y ." = ". $suma;
echo "\n";
echo "La resta de " . $x . " - " . $y ." = ". $resta;
echo "\n";
echo "El producto de " . $x . " * " . $y ." = ". $multiplicacion;
echo "\n";
echo "El módulo de " . $x . " y " . $y ." = ". $modulo;
echo "\n";
echo "La variable n es ". $n . ", la variable m es ". $m;
echo "\n";
echo "\n";
echo "La suma de " . $n . " + " . $m ." = ". $n + $m;
echo "\n";
echo "La resta de " . $n . " - " . $m ." = ". $n - $m;
echo "\n";
echo "El producto de " . $n . " * " . $m ." = ". $n * $m;
echo "\n";
echo "El módulo de " . $n . " y " . $m ." = ". $n % $m;
echo "\n";
echo "\n";
echo "la suma de todas las variables es ". $x + $y + $n + $m;
echo "\n";
echo "Dobles de las variables";
echo "\n";
echo $x * 2 .", ". $y * 2 . ", ". $n * 2 . ", ". $m * 2;
echo "\n";
echo "La suma de todas la variables es: ". $x + $y + $n + $m;
echo "\n";
echo "El producto de todas la variables es: ". $x * $y * $n * $m;
echo "\n";
echo "<h4>Ejercicio 3 B</h4>\n";
echo "\n";
echo "\n";



$num1 = readline("Escribe el primer numero: ");
$num2 = readline("Escribe el segundo numero: ");

echo "Menú\n";
echo "*****\n";
echo "1. Sumar \n";
echo "2. Restar \n";
echo "3. Multiplicar \n";
echo "4. Dividir \n";
$opera = readline("que quieres hacer? (Escribe el número): \n");
echo "*****\n";




//echo gettype($opera);
function calcular($num1, $num2, $opera){
    switch($opera){
        case 1: 
            $resultado = $num1 + $num2;
        break;
        case 2:
            $resultado = $num1 - $num2;
        break;
        case 3 :
            $resultado = $num1 * $num2;
        break;
        case 4:
            $resultado = $num1 / $num2;
        break;
    }
    return $resultado;
}
$calculo = calcular($num1, $num2, $opera);
echo "El resultado es: ". $calculo ." \n";



