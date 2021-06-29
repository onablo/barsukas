<?php

include __DIR__. '/Pinigine.php';

$pinigine = new Pinigine;
$pinigine->ideti(rand(1,20));
$pinigine->ideti(rand(1,20));
$pinigine->ideti(rand(1,20));
$pinigine->ideti(rand(1,20));
$pinigine->ideti(rand(1,20));
$pinigine->ideti(rand(1,20));
$pinigine->ideti(rand(1,20));

_d($pinigine->skaiciuoti(), 'Pinigu suma:'); 