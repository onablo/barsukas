<?php

require __DIR__ . '/Dangus.php';
require __DIR__ . '/Namas.php';
require __DIR__ . '/Garvezys.php';


$G = new Garvezys;


$G->sound2();
$G->soundDangus();
$G->color();
Garvezys::windows();

echo Garvezys::$static .'<br>';

echo $G->win .'<br>';