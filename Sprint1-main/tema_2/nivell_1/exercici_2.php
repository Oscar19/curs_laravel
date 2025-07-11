<?php 
$exercici = "Exercici 2";
echo "<h1>" . $exercici . "</h1>";
echo "<br><br>";
$mensaje = "Hello world!";
$mensaje = strtoupper($mensaje);
$curs = "Aquest és el curs de PHP";
echo $mensaje;
echo "<br><br>";
echo "Esta variable tiene ". strlen($mensaje). " caracteres";
echo "<br><br>";
echo "La variable en orden inverso ".strrev($mensaje);
echo "<br><br>";
echo $mensaje . " ". $curs;
?>