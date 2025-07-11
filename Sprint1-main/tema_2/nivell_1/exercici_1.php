<h1>Exercici 1</h1>
<br><br>
<?php 
    $num = 12;
    $double = 125.5;
    $frase = "Hoy es Sant Jordi";
    $resultado1 = true;
    define("nombre", "Oscar Calvo");
    echo "Esto es un integer ". $num;
    echo "<br><br>";
    echo "Esto es un double ". $double;
    echo "<br><br>";
    echo "Esto es un string ". $frase;
    echo "<br><br>";
    echo  "El resultado ".$resultado1 ." es true en ". gettype($resultado1) ;
    echo "<br><br>";
    echo "<h2>". nombre ."</h2>";
?>