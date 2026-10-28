<?php

class Veiculo {
    protected string $marca;
    private int $ano;

    public function __construct($marca, $ano){
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function apresentarVeiculo(){
        echo 'Marca do veículo: ' . $this->marca;
    }

    public function getAno(){
        echo ' | Ano do veículo: ' . $this->ano;
    }
}

?>