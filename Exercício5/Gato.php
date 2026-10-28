<?php

require_once 'Animal.php';

class Gato extends Animal {
    private string $cor;

    public function __construct($nome, $idade, $cor){
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }

    public function miar(){
        echo ' Miau, miau!';
    }
}

?>