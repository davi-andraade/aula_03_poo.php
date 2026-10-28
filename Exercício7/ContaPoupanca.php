<?php

require_once 'ContaBancaria.php';

class ContaPoupanca extends ContaBancaria {
    private string $objetivoPoupanca;

    public function __construct($titular, $saldo, $objetivoPoupanca){
        parent::__construct($titular, $saldo);
        $this->objetivoPoupanca = $objetivoPoupanca;
    }

    public function mostrarObjetivo(){
        echo 'Objetivo da poupança: ' . $this->objetivoPoupanca;
    }
}

?>