<?php

$trecias = 5;
$ketvirtas = $trecias + 5;


echo $ketvirtas;
echo '<br>';

$sk = 1;


echo '-------------';
echo '<br>';
echo $sk++ + ++$sk;
echo '<br>';
//echo $sk++ + $sk++;
echo '<br>';
//echo ++$sk + ++$sk;
echo '<br>';
//echo ++$sk * $sk++;
echo '<br>';

$pirmas = 'bla bla';
$antras = 'ku ku';
echo '<br>';
$trecias = $pirmas . ' ' . $antras;
echo $trecias;

$pirmas = 'antras';
$antras = 'bla_bla';

$bla_bla = 'Valio';

echo '<br>';  echo '<br><pre>'; echo '<br><hr>';

echo $$antras;
echo '<br>';

var_dump('ku ku');
