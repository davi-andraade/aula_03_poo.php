<?php

require_once 'SensorTemperatura.php';
require_once 'SensorUmidade.php';
require_once 'CameraSeguranca.php';

echo '<h3>Sensor de Temperatura:</h3>';

$SensorTemperatura = new SensorTemperatura('Celular | ', 'Samsung | ', 1002, 36);
$SensorTemperatura->apresentarDispositivo();
echo 'Número de Série: ' . $SensorTemperatura->getNumeroSerie() . ' | ';
$SensorTemperatura->mostrarTemperatura();

echo '<br><hr>';

$SensorUmidade = new SensorUmidade('Tablet | ', 'Motorola | ', 1007, 30);
$SensorUmidade->apresentarDispositivo();
echo 'Número de Série: ' . $SensorTemperatura->getNumeroSerie() . ' | ';
$SensorUmidade->mostrarUmidade();

echo '<br><hr>';

$CameraSeguranca = new CameraSeguranca('Intelbras | ', 'Sartori | ', 10099, 40);
$CameraSeguranca->apresentarDispositivo();
echo 'Número de Série: ' . $CameraSeguranca->getNumeroSerie() . ' | ';
$CameraSeguranca->mostrarResolucao();

?>