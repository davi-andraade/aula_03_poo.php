<?php

require_once 'Veiculo.php';

class Carro extends Veiculo {
    private int $quantidadePortas;

    public function __construct($marca, $ano, $quantidadePortas){
        parent::__construct($marca, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function mostrarCarro(){
        echo ' | Quantidade de portas: ' . $this->quantidadePortas . ' portas.';
    }
}

?>