<?php

require_once 'Publicacoes.php';

class Livro extends Publicacao {
    private string $autor;

    public function __construct($titulo, $anoPublicacao, $autor) {
        parent::__construct($titulo, $anoPublicacao);
        $this->autor = $autor;
    }

    public function mostrarLivro() {
        $this->mostrarTitulo();
        echo " | Ano: " . $this->getAnoPublicacao();
        echo " | Autor: " . $this->autor;
        echo "<br>";
    }
}

?>