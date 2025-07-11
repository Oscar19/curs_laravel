<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="tiempo" placeholder="Saber el gasto del tiempo de llamada">
    
    <input type="submit" name="envia" value="Calcular"/>
</form>
    <?php 
    if(isset($_POST["envia"])){
    $tiempo = $_POST["tiempo"];
    function calcula($tiempo){
        $precio_inicial = 10;
        $precio_minuto = 5;
        if($tiempo <= 3){
            echo "El precio gastado es de 10 centimos";
        }
        else{
            $costo_inicial = $tiempo * $precio_minuto;
            $precio_llamada = $costo_inicial + $precio_inicial;
            echo "El precio de la llamada es de ". $precio_llamada ." centimos";
        }
        
    }
    calcula($tiempo, $precio_llamada);

}
    
    ?>
</body>
</html>