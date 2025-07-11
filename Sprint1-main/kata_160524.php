<?php 
$multiArray = array(
   0 => array(2, 7, 6),
   1 => array(9, 5, 1),
   2 => array(4, 3, 8)
);

$b = array_map("array_sum", $multiArray);

print_r($b);



?>