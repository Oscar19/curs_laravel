<?php 
    require_once("classes/cars.php");

    $car1 = new Car("Toyota", "456987mgz", "95", 199);

    $car1->boost();
    
  print_r($car1);
?>