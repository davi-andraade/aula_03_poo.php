<?php

require_once 'Aluno.php';
require_once 'Professor.php';

$aluno = new Aluno('Davi', 17, 'DS');
$aluno->exibirInformacoes();
$aluno->exibirCurso();

echo '<br><br>';

$professor = new Professor('Samuel', 23, 'Banco de Dados');
$professor->exibirInformacoes();
$professor->exibirDisciplina();

?>