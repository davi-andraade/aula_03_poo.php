<?php

class ContaBancaria {
    protected string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
            echo 'Depósito: R$ ' . $valor . '<br>';
        }
        else{
            echo 'Não foi possível realizar o depósito!<br>';
        }
    }

    public function sacar($valor){
        if($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
            echo 'Saque: R$ ' . $valor . '<br>';
        }
        else{
            echo 'Não foi possível realizar o saque!<br>';
        }
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

?>