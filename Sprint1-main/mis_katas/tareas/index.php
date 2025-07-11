<?php 

require_once("Tarea.php");
require_once("Estado.php");

// Crear instancias de Tarea
$tarea1 = new Tarea("Comprar víveres", "Comprar leche, pan y huevos", EstadoTarea::Pendiente);
$tarea2 = new Tarea("Limpiar la casa", "Barrer y trapear el piso", EstadoTarea::EnProgreso);

// Mostrar información de las tareas
echo $tarea1;
echo $tarea2;

// Cambiar estado de las tareas
$tarea1->cambiarEstado(EstadoTarea::Completada);
$tarea2->cambiarEstado(EstadoTarea::Completada);

// Mostrar información de las tareas después del cambio de estado
echo "\nDespués de cambiar el estado:\n";
echo $tarea1;
echo $tarea2;
?>
