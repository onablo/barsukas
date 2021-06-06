<?php
echo 'Nr 1<br>';
echo '-------<br>';
/* 1.	Sugeneruokite masyvą iš 10 elementų, 
kurio elementai būtų masyvai iš 5 elementų 
su reikšmėmis nuo 5 iki 25; */
$masyvas = [];
foreach(range(1, 10) as $keyBig => $_) {
    foreach(range(1, 5) as $keySmall => $_) {
    $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
}
print_r($masyvas);              



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 2 - a<br>';
echo '----------<br>';
/* 2.	Naudodamiesi 1 uždavinio masyvu:
a.	Suskaičiuokite kiek masyve yra elementų didesnių už 10; */

$didesniuSuma = 0;
foreach ($masyvas as $val) { 
    foreach ($val as $val2) { 
        if ($val2 > 10) {
           $didesniuSuma++; 
        }
    }     
}
echo 'Masyve elementų didesnių už 10 yra:  ';
print_r($didesniuSuma);



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 2 - b<br>';
echo '----------<br>';
/*2. b.	Raskite didžiausio elemento reikšmę; */

$didziausiaReiksme = 0;
foreach ($masyvas as $val) { 
    foreach ($val as $val2) { 
        if ($val2 > $didziausiaReiksme) {
            $didziausiaReiksme = $val2; 
        }
    }     
}
echo 'Didžiausia masyvo elemento reikšme yra:  ';
print_r($didziausiaReiksme);



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 2 - c<br>';
echo '----------<br>';
/* 2. c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais 
indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.); */

$masyvuSuma = 0;
foreach ($masyvas[0]  as $o => $val) { 
    foreach ($masyvas  as $i => $val2) { 
        if ($val2 > $didziausiaReiksme) {
            $masyvuSuma += $masyvas[$i][$o];       
        }
    }
    echo $masyvuSuma . '<br>';     
}



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 2 - d<br>';
echo '----------<br>';
/* 2. d. Visus masyvus “pailginkite” iki 7 elementų; */
$masyvas1 = [];
foreach ($masyvas  as $o => $val) { 
    foreach ($masyvas  as $i => $val2) { 
        for ($i =10; $i < 16; $i++) {
            $masyvas1[$o][$i] = rand(5, 25);
        }
    }     
}
print_r($masyvas1); 



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 2 - e<br>';
echo '----------<br>';
/* 2. e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą 
atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, 
turinčio indeksą 0 dideliame masyve, visų elementų sumai; */ 
