<?php
require __DIR__ . '/PlanasStogui.php';
require __DIR__ . '/Planas.php';


require __DIR__ . '/Pirmas.php';
require __DIR__ . '/Antras.php';
require __DIR__ . '/Stogas.php';







$namas = new Pirmas;
$namas = new Antras;
$namas = new Stogas;

echo $namas->doPirmas();
echo '<br>';
echo $namas->doAntras();
echo '<br>';
echo $namas->doStogas();
echo '<br>';

