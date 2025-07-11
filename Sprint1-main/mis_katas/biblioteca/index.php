<?php 
/* 
Objetivo:

Crear un sistema de gestión de una biblioteca que permita realizar las siguientes operaciones:

    Definir una clase abstracta MaterialBiblioteca:
        Propiedades: titulo, autor, anioPublicacion.
        Métodos abstractos: getTipo().
        Métodos comunes: getTitulo(), getAutor(), getAnioPublicacion().

    Crear una clase Libro que extienda MaterialBiblioteca:
        Propiedad adicional: numeroPaginas.
        Implementar el método getTipo().

    Crear una clase Revista que extienda MaterialBiblioteca:
        Propiedad adicional: numeroEdicion.
        Implementar el método getTipo().

    Crear un archivo index.php para crear instancias de libros y revistas, mostrar su información y listar todos los materiales disponibles en la biblioteca.

Especificaciones:

    Utiliza una clase abstracta MaterialBiblioteca para definir las propiedades y métodos comunes.
    Implementa las clases Libro y Revista que extiendan MaterialBiblioteca.
    Implementa métodos para mostrar información de los materiales y obtener el tipo de material.*/

    require_once("Libro.php");
    require_once("Revista.php");

  


$libro1 = new Libro("Cien Años de Soledad", "Gabriel García Márquez", 1967, 471);
$revista1 = new Revista("National Geographic", "Varios Autores", 2023, 500);


$materiales = [$libro1, $revista1];

foreach ($materiales as $material) {
    echo "Tipo: " . $material->getTipo() . "\n";
    echo "Título: " . $material->getTitulo() . "\n";
    echo "Autor: " . $material->getAutor() . "\n";
    echo "Año de Publicación: " . $material->getAnioPublicacion() . "\n";
    if ($material instanceof Libro) {
        echo "Número de Páginas: " . $material->getNumeroPaginas() . "\n";
    } elseif ($material instanceof Revista) {
        echo "Número de Edición: " . $material->getNumeroEdicion() . "\n";
    }
    echo "\n";
}




?>