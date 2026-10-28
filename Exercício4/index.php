<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro1 = new Livro("Dom Casmurro", 1899, "Machado de Assis");
$livro2 = new Livro("O Pequeno Príncipe", 1943, "Antoine de Saint-Exupéry");

$revista1 = new Revista("Superinteressante", 2025, 450);

echo "<h3>Livros</h3>";

$livro1->mostrarLivro();
$livro2->mostrarLivro();

echo "<h3>Revista</h3>";

$revista1->mostrarRevista();

?>