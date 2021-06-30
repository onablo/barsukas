<?php

require __DIR__ . '/Pinigine.php';

$pinigine = new Pinigine;

$pinigine->skaiciuoti();

$pinigine->ideti(35);
$pinigine->ideti(1.2);
$pinigine->ideti(15);
$pinigine->ideti(10.01);
$pinigine->ideti(65);
$pinigine->ideti(2.50);
$pinigine->ideti(25);

$pinigine->skaiciuoti();

$pinigine->monetos();

$pinigine->banknotai();

echo '<pre>';
var_dump($pinigine);