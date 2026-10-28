<?php

class Dispositivo {
    protected string $nome;
    protected string $fabricante;
    private int $numeroSerie;

    public function __construct($nome, $fabricante, $numeroSerie){
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->numeroSerie = $numeroSerie;
    }

    public function apresentarDispositivo(){
        echo 'Nome do dispositivo: ' . $this->nome;
        echo 'Fabricante: ' . $this->fabricante;
    }

    public function getNumeroSerie(){
        return $this->numeroSerie;
    }
}

?>