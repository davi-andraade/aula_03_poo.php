<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente = new Gerente('Felipe', 5000, 'Gerente');
$gerente->nome();
$gerente->getSalario();
$gerente->gerenciarEquipe();

echo '<br><br>';

$desenvolvedor = new Desenvolvedor('Miguel', 2000, 'Portugol');
$desenvolvedor->nome();
$desenvolvedor->getSalario();
$desenvolvedor->programar();

?>