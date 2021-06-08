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
echo '<br>';
echo '-----------------------------------------------------<br>';



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

echo '---------Destytojo variantas---------------<br>';
$sums = [];
foreach ($masyvas as $index => $val1) { 
    foreach ($val1 as $index2 => $val2) {               
            $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
        }
    }
    print_r($sums);



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

$sumaVal2 = 0;
foreach ($masyvas as $val) { 
    foreach ($val  as $val2) { 
        $sumaVal2 += $val2;       
        }       
        $naujasMasyvas[] = $sumaVal2;
        $sumaVal2 = 0;                  // be sitos salygos gausim reksmes(suma ankstesnio + naujas el ir pask bus = bendrai sumai)
    }
print_r($naujasMasyvas); 



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 3 <br>';
echo '----------<br>';
/* 3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas
 turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
 Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
 Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).*/

$abc = range('A', 'Z');
foreach(range(1, 10) as $keyBig => $_) {
    foreach(range(1, rand(2, 20)) as $keySmall => $_) {
        $masyvasAbc[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}
print_r($masyvasAbc);    
echo '<br>'; 
echo '----rusiavimas p/l masyvo dydi, nuo mazesnio----<br>';

usort($masyvasAbc, function($a, $b) {

return count($a) <=> count($b);
});
print_r($masyvasAbc);  
echo '<br>'; 



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 4 <br>';
echo '----------<br>';
//4.	Išrūšiuokite trečio uždavinio pirmo lygio 
//masyvą taip, kad elementai kurių masyvai trumpiausi 
//eitų pradžioje. Masyvai kurie turi bent vieną “K” 
//raidę, visada būtų didžiojo masyvo visai pradžioje.

usort($masyvasAbc, function($a, $b) {

    $ak = (int) in_array('K', $a);
    $bk = (int) in_array('K', $b);

    if ($ak + $bk == 1) {
        return $bk <=> $ak;

    }

return count($a) <=> count($b);

});
print_r($masyvasAbc);  

echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 5 <br>';
echo '----------<br>';
// 5. Sukurkite masyvą iš 30 elementų. 
// Kiekvienas masyvo elementas yra masyvas 
// [user_id => xxx, place_in_row => xxx] 
// user_id atsitiktinis unikalus skaičius 
// nuo 1 iki 1000000, place_in_row atsitiktinis 
// skaičius nuo 0 iki 100. 
$masyvas = [];
$count = 0;         
do {                //generuojam, kol masyvas prisipildys su 30 reiksmiu
    $count++;       // del idomumo paskaiciuojam kiek cikla darem
    $uid = rand(1, 50);
    foreach ($masyvas as $user) {           //tikrinam, ar daugiau niekam unik r nepriskirem    
        if ($user['user_id'] == $uid) {     // -unikalus skaicius
            continue 2;                     //jei toks jau yra,tesiam tevini cikla (i do)
        }
    }
    $masyvas[] = [                          //naujam masyvui priskiriam masyva, kur yra
        'user_id' => $uid,                  //user id ir place in row, neunikalus
        'place_in_row' => rand(0, 100)];    
} while(count($masyvas) < 30);

print_r($masyvas);  //  _d($masyvas);   _d($count);





echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 6 <br>';
echo '----------<br>';
//6. Išrūšiuokite 5 uždavinio masyvą pagal user_id 
//didėjančia tvarka. Ir paskui išrūšiuokite pagal 
//place_in_row mažėjančia tvarka.
usort($masyvas, function($a, $b) {
    return $a <=> $b;
});
print_r($masyvas);  //_d($masyvas);

usort($masyvas, function($a, $b) {
    return $a['place_in_row'] <=> $b['place_in_row'];
});
print_r($masyvas);    //_d($masyvas);
echo '<br>';   

echo '<br>'; 
echo '-----destytojo rusiavimas 2 is 6 uzd-----<br>';


foreach($masyvasAbc as &$mazas) {     // kadangi cia masyvo kopija, rasom &  
    usort($mazas, function($a, $b) {
        return $a <=> $b;
    });
}
echo '<br>';
print_r($masyvasAbc);  
echo '<br>';



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 7 <br>';
echo '----------<br>';
// 7. Prie 6 uždavinio masyvo antro lygio masyvų 
// pridėkite dar du elementus: name ir surname. 
// Elementus užpildykite stringais iš atsitiktinai 
// sugeneruotų lotyniškų raidžių, kurių ilgiai 
// nuo 5 iki 15. 

foreach ($masyvas as &$user) {      // naud referenca &- dedam i orig. masyva
    $user['name'] = '';             //elementu pridejimas
    $user['surname'] = '';

    foreach(range(1, rand(5, 15)) as $_) {
        $user['name'] .= range('a', 'z')[rand(0, 25)];  //simboliu generavimas
    }
    foreach(range(1, rand(5, 15)) as $_) {              // kartojam nuo 5-15 k.
        $user['surname'] .= range('a', 'z')[rand(0,25)];
        }
    }
    echo '<br>';
    print_r($masyvas);  
    echo '<br>';



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 8 <br>';
echo '----------<br>';
/* 8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal 
taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 
iki 10 įrašykite tiesiogiai. */

$masyvas = [];

foreach (range(1, 10) as $key1 => $_) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $masyvas[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $sk) as $key2 => $_) {
            $masyvas[$key1][] = rand(0, 10); 
        }
    }
}
print_r($masyvas);            //_d($masyvas);



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 9 <br>';
echo '----------<br>';
/*9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite 
masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu 
reikšmė yra masyvas, to masyvo reikšmių sumos.
*/

usort($masyvas, function($a, $b) {
    $asum = 0;
    if(is_array($a)) {
        foreach($a as $value) {
            $asum += $value;
        }
        $a = $asum;
    }    
    $bsum = 0; 
    if(is_array($b)) {
        foreach($b as $value) {
            $bsum += $value;
        }
        $b = $bsum;
    }
    return $a <=> $b;
}
);
print_r($masyvas); 



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr10<br>';
echo '-------<br>';
/* 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė 
color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų 
atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva 
color. */

$masyvasD = [];
$string = '#%+*@裡';

foreach(range(1, 10) as $index => $val) {
    $masyvasD[] = [];
    foreach (range(1, 10) as $index2 => $val2) {
        $masyvasD[$index][] = [         //cia galima irasyti vietoje[]-[$index2],
        $string[rand(0, 6)],                                // bet ir be jo veikia taip pat
        '#'. rand(0, 999999)        
        ];
    }
}
//print_r($masyvasD);

foreach($masyvasD as $index => $val) {
    foreach ($val as $index2 => $val2) {
        echo "<span style = 'color: ". $val2[1]. "'>". $val2[0]. "</span>";
    }
    echo "<br>";
}

