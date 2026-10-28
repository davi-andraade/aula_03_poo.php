<?php

require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro('Fiat', 2022, 4);
$carro->apresentarVeiculo();
$carro->getAno();
$carro->mostrarCarro();

echo '<br><br>';

$moto = new Moto('Harley-Davidson', 2020, 883);
$moto->apresentarVeiculo();
$moto->getAno();
$moto->mostrarMoto();

?>