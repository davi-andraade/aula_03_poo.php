<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

echo '<h3>Cachorro:<h3>';

$cachorro = new Cachorro("Robinho", 7, 'Au-au!');
$cachorro->mostrarNome();
$cachorro->getIdade();
$cachorro->latir();

echo '<br><br>';

echo '<h3>Gato:<h3>';

$gato = new Gato("Jade", 3, 'Miau, miau!');
$gato->mostrarNome();
$gato->getIdade();
$gato->miar();

?>