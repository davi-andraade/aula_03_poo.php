<?php

require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

echo '<h3>Conta Corrente:</h3>';

$ContaCorrente = new ContaCorrente('Davi', 5000, '177-477');
$ContaCorrente->depositar(500);
$ContaCorrente->sacar(200);

echo 'Saldo atual: R$ ' . number_format($ContaCorrente->getSaldo(), 2, ',', '.') . '<br>';
$ContaCorrente->mostrarCartao();

echo '<br><hr>';

echo '<h3>Conta Poupança:</h3>';

$ContaPoupanca = new ContaPoupanca('Murilo', 3000, 'Comprar uma casa');
$ContaPoupanca->depositar(500);
$ContaPoupanca->sacar(200);

echo 'Saldo atual: R$ ' . number_format($ContaPoupanca->getSaldo(), 2, ',', '.') . '<br>';
$ContaPoupanca->mostrarObjetivo();

?>