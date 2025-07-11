<?php 
/* 
Crea un sistema de gestión de tareas que permita realizar las siguientes operaciones:

    Definir un enum llamado EstadoTarea:
        Estados posibles: Pendiente, EnProgreso, Completada.

    Crear una clase Tarea con las siguientes propiedades y métodos:
        Propiedades: titulo, descripcion, estado (de tipo EstadoTarea).
        Método __construct para inicializar las propiedades.
        Métodos getTitulo, getDescripcion, y getEstado para obtener los valores de las propiedades.
        Método setEstado(EstadoTarea $nuevoEstado) para cambiar el estado de la tarea.
        Método __toString para obtener una representación en cadena de la tarea.

    Crear algunas instancias de Tarea, cambiar sus estados y mostrar los resultados.

Especificaciones:

    Utiliza el enum para los estados de la tarea.
    Define correctamente los métodos y propiedades en la clase Tarea.
    Crea un archivo index.php para crear instancias de Tarea, cambiar sus estados y mostrar los resultados.
    */
    require_once("Estado.php");
    class Tarea{
        private $titulo;
        private $descripcion;
        private EstadoTarea $estado;

        public function __construct($titulo, $descripcion, $estado){
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
            $this->estado = $estado;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function cambiarEstado(EstadoTarea $newEstado){
            $this->estado = $newEstado;
        }
        public function __toString() {
        return "Tarea: $this->titulo\nDescripción: $this->descripcion\nEstado: {$this->estado->name}\n";
    }
        
    }
?>