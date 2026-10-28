<?php

require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

echo '<h3>Produto Físico:<h3>';
$produtoFisico = new ProdutoFisico('Saco de cimento', 45.99, 50);
$produtoFisico->mostrarProduto();
$produtoFisico->getPreco();
$produtoFisico->mostrarPeso();

echo '<br><hr>';

echo '<h3>Produto Digital:<h3>';
$produtoDigital = new ProdutoDigital('Ebook', 35, 2);
$produtoDigital->mostrarProduto();
$produtoDigital->getPreco();
$produtoDigital->mostrarTamanho();

?>