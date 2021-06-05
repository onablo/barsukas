<?php
echo 'Nr3<br>';
echo '-------<br>';
/*	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės
 A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.*/
  
$raides = ['A', 'B', 'C', 'D'];
$raidziuMasyvas = array_fill(0, 200, 0);
$a = 0;
$b = 0;
$c = 0;
$d = 0;

foreach ($raidziuMasyvas as $key => &$value) {
$value = $raides[rand(0, count($raides)-1)];
if ($value === 'A') {
$a++;
} elseif ($value === 'B') {
$b++;
} elseif ($value === 'C') {
$c++;
} else {
$d++;
}
}*/