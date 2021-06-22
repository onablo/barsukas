<?php

require __DIR__ . '/Kibiras1.php';

$kibiras = new Kibiras1; 

echo '<pre>';
var_dump($kibiras);
echo '<br>';



$kibiras->pridetiDaugAkmenu(15);
$kibiras->pridetiDaugAkmenu(20);
$kibiras->pridetiDaugAkmenu(10);
$kibiras->pridetiDaugAkmenu(50);
$kibiras->prideti1Akmeni();
$kibiras->kiekPririnktaAkmenu();
$kibiras->prideti1Akmeni();
$kibiras->prideti1Akmeni();
$kibiras->kiekPririnktaAkmenu();
