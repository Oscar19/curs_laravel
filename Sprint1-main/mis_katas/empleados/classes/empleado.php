<?php 
/*
Modele el objeto Empleado que posee las siguientes características, dni, nombre, apellido y salario. Desarrolle los métodos 
necesarios para poder realizar lo siguiente: 
a. Inicialice un empleado Carlos Gutiérrez, con dni 23456345 y salario inicial de 25000.
b. Inicialice un empleado Ana Sánchez, con dni 34234123 y salario inicial de 27500.
c. Imprima ambos objetos por pantalla.
*/
    class Empleado{
        public $dni;
        public $nombre;
        public $apellido;
        public $salario;

        function __construct($dni,$nombre,$apellido,$salario){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->salario = $salario;

        }
        function imprimir(){
            echo "DNI: ".$this->dni."\n";
            echo "Nombre: ".$this->nombre."\n";
            echo "Apellido: ".$this->apellido."\n";
            echo "Salario".$this->salario."\n";
            echo "\n";
        }

    }
?>