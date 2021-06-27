<?php

require __DIR__ . '/Miskas.php';
require __DIR__ . '/Zveris.php';

$Zveris = new Miskas;





$Miskas->papasakok('Zalias');
$Zveris->papasakok('Linksmas');   
$Zveris->papasakok('Pasaka');



_d($Miskas->papasakok(), '1');
_d($Zveris::papasakok(), '2');

