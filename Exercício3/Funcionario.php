<?php

class Funcionario {
    protected string $nome;
    private float $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function nome(){
        echo 'Funcionário: ' . $this->nome;
    }

    public function getSalario(){
        echo ' | Salário: ' . $this->salario;
    }
}

?>