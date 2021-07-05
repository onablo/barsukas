<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$krepsys = new Krepsys;

// Indexe t. b min, visi if ir kt. t.b. klasese
// cia negali buti integer, renkam kol neuzsipilys krepsys.

while ($krepsys->deti(new Grybas)) {} 
echo '<pre>';
var_dump($krepsys);