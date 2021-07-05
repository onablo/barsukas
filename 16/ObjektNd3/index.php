<?php

require __DIR__ . '/Kibiras2.php';

$kibirasA = new Kibiras2; 
$kibirasB = new Kibiras2;
$kibirasC = new Kibiras2;


echo '<pre>';
var_dump($kibirasA);
echo '<br>';

var_dump($kibirasB);
echo '<br>';

var_dump($kibirasC);
echo '<br>';



$kibirasA->pridetiDaugAkmenu(15);   
$kibirasB->pridetiDaugAkmenu(20);
$kibirasC->pridetiDaugAkmenu(30);
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();
$kibirasC->prideti1Akmeni();


_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d($kibirasC->kiekPririnktaAkmenu(), 'C');
_d(kibiras2::visoAkmenuKiekisVisuoseKibiruose(), 'Viso');



