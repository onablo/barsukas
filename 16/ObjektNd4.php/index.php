<?php

require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';

$KibirasNePo1 = new Kibiras3;






$KibirasNePo1->pridetiDaugAkmenu(10);   
$KibirasNePo1->pridetiDaugAkmenu(20);
$KibirasNePo1->prideti1Akmeni();


_d($KibirasNePo1->kiekPririnktaAkmenu(), 'Po1');
_d($KibirasNePo1::visoAkmenuKiekisVisuoseKibiruose(), 'Viso');


