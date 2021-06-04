<?php
echo 'Nr1<br>';
echo '-------<br>';
/*Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 
iki 29), kurių reikšmės yra atsitiktiniai skaičiai 
nuo 5 iki 25.*/

$arraySize = 30;
 
$masyvas = array_fill(0, $arraySize, ' ');
 
foreach ($masyvas as $index => &$value) {
 
    $value = rand(5, 25);
    echo "$index =>$value" . '<br>';
}
echo '----------------------<br>';
echo 'Destytojo variantas';
echo '<br>';
$masyvas = [];

foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
//_d($masyvas);
//_d(range(1, 30), 'Mano masyvas');
//echo $masyvas;



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr2, a <br>';
/*Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra reikšmių 
didesnių už 10;*/

$value = rand(5, 25);
$count = 0;
foreach ($masyvas as $value) {
    if ($value > 10) {
    $count++;    
    }
}
echo "Reiksmiu didesniu uz 10 yra: $count." . '<br>';




echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, b <br>';
echo '-------<br>';
/*Raskite didžiausią masyvo reikšmę ir jos indeksą 
arba indeksus jeigu yra keli;*/

$masyvas = [];

foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br>';

$bigest = 0;
foreach ($masyvas as $key => $value) {
    if ($value > $bigest) {
        $bigest = $value;
    }
}
echo "Didziausia masyvo reiksme yra: $bigest."; 
echo '-'.array_search($bigest, $masyvas);


echo '<br>';
echo '--------------------------<br>';
echo 'Kitas, be indekso, variantas<br>';
echo '--------------------------<br>';
$masyvas = [];

foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br>';
echo max($masyvas);


echo '<br>';
echo '--------------------------<br>';
echo '---Destytojo variantas----<br>';
echo '--------------------------<br>';
$masyvas = [];

foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br>';
$max = 5;
$index = [];
foreach ($masyvas as $key => $value ) {
    if ($value > $max) { 
        $max = $value;
        $index = [];
    }
    if ($value == $max) { 
        $index[] = $key;
    }
}
print_r($max, 'max');                           // neatspausdino
print_r($index, 'index');



echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, c <br>';
echo '-------<br>';
/*Suskaičiuokite visų porinių (lyginių) indeksų
reikšmių sumą;*/

$masyvas = [];
foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br>';

$poriniuSuma = 0;
foreach ($masyvas as $key => $value ) {
    if ($key%2 === 0) { 
    $poriniuSuma += $value;
    }
}
echo "Poriniu indeksu reiksmiu suma yra: $poriniuSuma.";




echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, d <br>';
echo '-------<br>';
/*Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes
 minus tos reikšmės indeksas; */

$masyvas = [];
foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br>';
$naujasMasyvas = [];
foreach ($masyvas as $key => $value ) {
    $naujaReiksme = $value - $key;
    array_push($naujasMasyvas, $naujaReiksme);
}
print_r($naujasMasyvas);



echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, e <br>';
echo '-------<br>';
/*Papildykite masyvą papildomais 10 elementų su reikšmėmis 
nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;*/
$masyvas = [];
foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
for ($i =30; $i <40; $i++) {
    $masyvas[$i] = rand(5, 25);
}
print_r($masyvas);



echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, f <br>';
echo '-------<br>';
/*Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi 
būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių*/
$masyvas = [];
foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br>';

$poriniuMasyvas = [];
$neporiniuMasyvas = [];
print_r($neporiniuMasyvas);

foreach ($masyvas as $key => $value ) {
    if ($key %2 === 0) {
        array_push($poriniuMasyvas, $value);    
    } else  {
        array_push($neporiniuMasyvas, $value);
    }
}
echo '-----Poriniu index reiksmiu masyvas-----<br>';
print_r($poriniuMasyvas);
echo '<br>';
echo '-----Neporiniu index reiksmiu masyvas-----<br>';
print_r($neporiniuMasyvas);



echo '</div>';
echo '<hr>';
echo 'Nr2, g <br>';
echo '-------<br>';
/*  Pirminio masyvo elementus su poriniais indeksais padarykite 
lygius 0 jeigu jie didesni už 15;*/

foreach ($poriniuMasyvas as $key => $value ) {
    if ($value > 15) {
        foreach ($poriniuMasyvas as $ind => &$val) {       
        $val = 0;
        }
    }
}
echo 'Poriniu index reiksmiu masyvas su reks((>15) = 0)<br>';
print_r($poriniuMasyvas);



echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, h <br>';
echo '-------<br>';
/*Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;*/
print_r($masyvas);
echo '<br>';
echo '--------Destytojo variantas-----------<br>';
/*
reset ($masyvas);
print_r(current($masyvas));
echo '<br>';
print_r(key($masyvas));
echo '<br>';
next($masyvas);
print_r(current($masyvas));
echo '<br>';
print_r(key($masyvas));
echo '<br>';
next($masyvas);
print_r(current($masyvas));
echo '<br>';
print_r(key($masyvas));
*/

reset ($masyvas);
$ind10 = false;
do {
    $ind10 = key($masyvas);
    $value = current($masyvas);
    next($masyvas);
    
}
while (key($masyvas)!==null && $value < 10);

echo "$ind10 - $value ";



echo '<br>';
echo '--------Tomo variantas-----------<br>';
foreach ($masyvas as $key => $value ) {
    if ($value > 10) {
    break;
    }      
}
echo  "Pirmo elemento > 10 reiksme yra:$value , indeksas: $key.";

        

echo '</div>';
echo '<hr>';
echo '<br>';
echo 'Nr2, i <br>';
echo '-------<br>';
/* Naudodami funkciją unset() iš masyvo ištrinkite visus elementus 
turinčius porinį indeksą;*/






