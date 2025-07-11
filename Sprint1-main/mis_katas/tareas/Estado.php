<?php 
//Estados posibles: Pendiente, EnProgreso, Completada.
    
enum EstadoTarea: string {
    case Pendiente = 'Pendiente';
    case EnProgreso = 'En Progreso';
    case Completada = 'Completada';
}
    
?>