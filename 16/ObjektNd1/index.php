<?php

require __DIR__ . '/Kibiras1.php';

$kibirasA = new Kibiras1; 
$kibirasB = new Kibiras1;


_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');





$kibirasA->pridetiDaugAkmenu(15);
$kibirasB->pridetiDaugAkmenu(20);
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');

$kibirasA->pridetiDaugAkmenu(10);
$kibirasB->pridetiDaugAkmenu(50);
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
