<?php

require __DIR__ . '/Pinigine.php';


$pinigine = new Pinigine;

$pinigine->skaiciuoti();

$pinigine->ideti(5);
$pinigine->ideti(0.33);

$pinigine->skaiciuoti(); 

$pinigine->ideti(25);
$pinigine->ideti(41.55);

$pinigine->skaiciuoti(); 