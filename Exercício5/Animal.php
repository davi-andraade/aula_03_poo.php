<?php

class Animal {
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function mostrarNome(){
        echo 'Nome: ' . $this->nome;
    }

    public function getIdade(){
        echo ' | Idade: ' . $this->idade . ' anos | ';
    }
}

?>