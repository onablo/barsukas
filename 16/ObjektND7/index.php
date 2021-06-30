<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$krepsys = new Krepsys;

// cia negali buti integer, renkam kol neuzsipilys 
// krepsys. Indexe t. b min, visi if ir kt. t.b. klasese
while ($krepsys->deti(new Grybas)) {} 
echo '<pre>';
var_dump($krepsys);