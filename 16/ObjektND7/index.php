<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$krepsys = new Krepsys;
$pririnkta = 0;

do {
    $grybas = new Grybas;
    if($grybas->valgomas && !$grybas->sukirmijes) {
        $pririnkta += $grybas->svoris;
        echo "Pririnkta : $pririnkta.";
        echo '<br>';
    } else {
        echo "Sukirmijes arba nevalgomas grybas.";
        echo '<br>';
    }
} while ($krepsys->pilnasKrepsys() > $pririnkta);