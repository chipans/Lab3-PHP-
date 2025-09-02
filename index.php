<?php

require_once("Autor.php");
require_once("Libro.php");
require_once("Revista.php");
require_once("ImprimirAutor.php");

// Crear 3 autores
$autor1 = new Autor("Elena White", "Americana");
$autor2 = new Autor("Gabriel García Márquez", "Colombiana");
$autor3 = new Autor("Isabel Allende", "Chilena");

// Usar la clase ImprimirAutor
$imprimirAutor = new ImprimirAutor();
echo "--- Usando la clase ImprimirAutor ---\n";
$imprimirAutor->getInfo($autor1);
echo "\n\n";

// Crear 2 Libros y 2 Revistas
$libro1 = new Libro("Cien años de soledad", 1967, $autor2);
$libro2 = new Libro("La casa de los espíritus", 1982, $autor3);
$revista1 = new Revista("National Geographic", 205, "Mensual");
$revista2 = new Revista("Time", 52, "Semanal");

// Agregar las 4 clases a un arreglo
$publicables = [$libro1, $libro2, $revista1, $revista2];

echo "--- Usando la interfaz IPublicable ---\n";
// Iterar sobre el arreglo e imprimir la información
foreach ($publicables as $item) {
    echo $item->getInfo() . "\n\n";
}