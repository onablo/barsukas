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

for ($i = 0; $i <= 20; $i++) {
    $masyvas1[] = $letters[rand(0, 3)];
    $masyvas2[] = $letters[rand(0, 3)];
    $masyvas3[] = $letters[rand(0, 3)];    
}

print_r($masyvas1);
echo '<br>';
echo '---------------------------<br>';
print_r($masyvas2);
echo '<br>';
echo '---------------------------<br>';
print_r($masyvas3);
echo '<br>';
echo '---------------------------<br>';

$masyvasAbc = [];
foreach ($masyvas1 as $i => $value ) {
    $naujaReiksme = $masyvas1[$i] . $masyvas2[$i] . $masyvas3[$i];
    array_push($masyvasAbc, $naujaReiksme);
}
print_r($masyvasAbc);
echo '<br>';
echo '---------------------------<br>';

$unikAbcMasyvas = array_unique($masyvasAbc);
print_r($unikAbcMasyvas);
echo '<br>';
echo '---------------------------<br>';

$sumaReiksmiuMasyvasAbc = count($masyvasAbc);
$sumaUnikReiksmiu = 0;
$sumaNeunikReiksmiu = 0;
foreach ($unikAbcMasyvas as $i => $value ) {
    $sumaUnikReiksmiu  = count($unikAbcMasyvas);
    $sumaNeunikReiksmiu = $sumaReiksmiuMasyvasAbc - $sumaUnikReiksmiu;
}
echo "Unikaliu reiksmiu masyve suma yra: $sumaUnikReiksmiu, 
neunikaliu: $sumaNeunikReiksmiu. ";
echo '<br>';



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr6<br>';
echo '-------<br>';
/* 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai     ??_nepabaigtas
skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi 
būti unikalios savo masyve (t.y. neturi kartotis). */

$masyvas1 = [];
foreach(range(1, 100) as $i => $val) {
    $masyvas1[] = rand(100, 999);
    $unikMasyvas1 = array_unique($masyvas1);
}

$sumaUnikMasyvas1  = count($unikMasyvas1);
print_r($unikMasyvas1);
echo " =  $sumaUnikMasyvas1.";
echo '<br>';
echo '---------------------------<br>';



$masyvas2 = [];
foreach(range(1, 100) as $i => $val) {
    $masyvas2[] = rand(100, 999);
    $unikMasyvas2 = array_unique($masyvas2);
}
$sumaUnikMasyvas2  = count($masyvas2);
print_r($unikMasyvas2);
echo " =  $sumaUnikMasyvas2.";
echo '<br>';
echo '---------------------------<br>';

echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr7<br>';
echo '-------<br>';
/*  7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios
 yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. */


