<?php

require_once 'Publicacoes.php';

class Revista extends Publicacao {
    private int $edicao;

    public function __construct($titulo, $anoPublicacao, $edicao) {
        parent::__construct($titulo, $anoPublicacao);
        $this->edicao = $edicao;
    }

    public function mostrarRevista() {
        $this->mostrarTitulo();
        echo " | Ano: " . $this->getAnoPublicacao();
        echo " | Edição: " . $this->edicao;
        echo "<br>";
    }
}

?>