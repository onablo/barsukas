<?php
echo 'Nr3<br>';
echo '-------<br>';
/*	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės
 A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.*/

 $letters = ['A', 'B', 'C', 'D'];
 for ($i = 0; $i < 50; $i++) {
    $raidziuMasyvas[] = $letters[rand(0, 3)];
 }
print_r($raidziuMasyvas);
echo '<br>';
echo '--------------------------------<br>';

$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

foreach ($raidziuMasyvas as $key => $value ) {
    if ($value === 'A') {
        $countA++;
    } elseif ($value === 'B') {
        $countB++;
    } elseif ($value === 'C') {
        $countC++;
    } elseif ($value === 'D'){
        $countD++;
    }
}
echo " Raidziu A masyve yra: $countA, raidziu B: $countB, raidziu C: $countC,
raidziu D: $countD.";



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr4<br>';
echo '-------<br>';
/* 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.*/

asort($raidziuMasyvas);                           
print_r($raidziuMasyvas);



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr5<br>';
echo '-------<br>';
/* 5.Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
reikšmių ir kiek unikalių kombinacijų gavote. */

$size = 20;
for ($i = 0; $i < $size; $i++) {
    $masyvas1[] = $letters[rand(0, 3)];
    $masyvas2[] = $letters[rand(0, 3)];
    $masyvas3[] = $letters[rand(0, 3)];    
}

for ($i = 0; $i < $size; $i++) {
    $masyvasCount = $masyvas1[$i] . $masyvas2[$i] . $masyvas3[$i];
}
print_r($masyvasCount);





echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr5<br>';
echo '-------<br>';
/* 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai 
skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi 
būti unikalios savo masyve (t.y. neturi kartotis). */