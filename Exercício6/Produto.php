<?php

class Produto {
    protected string $nome;
    private float $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrarProduto(){
        echo 'Produto: ' . $this->nome;
    }

    public function getPreco(){
        echo ' | Preço: R$' . number_format($this->preco, 2, ',', '.');
    }
}

?>