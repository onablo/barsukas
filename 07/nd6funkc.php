<?php
echo 'Nr 1<br>';
echo '-------<br>';
/* 1. Parašykite funkciją, kurios argumentas būtų 
tekstas, kuris yra įterpiamas į h1 tagą; */
$text = 'Labas!';
function tekstas($text) {
    return $text;  
}
echo "<h1>".$text."</h1>";   


echo '--------Kitas variantas--------<br>';
echo '<br>';

function textas($text) {
    if(is_array($text)){
        foreach($text as $val){
            return "<h1 style=\"display:inline-block\">$val<br> </h1>";
        }
    }else {
        return "<h1>$text <br></h1>";
    }
}
echo "<h1>$text <br></h1>";




echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 2 <br>';
echo '----------<br>';
/* 2.	Parašykite funkciją su dviem argumentais, pirmas argumentas 
tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami 
šią funkciją remkitės pirmame uždavinyje parašytą funkciją; */
$text = 'Labas!';
$numeris =rand(1, 6);
function tekstas1($text, $numeris) {  
    return tekstas1;    
}
echo "<h1>".$text."</h1>";
echo "Numeris: . $numeris ";
echo '<br>';


echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 3 <br>';
echo '----------<br>';
/* 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli 
skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir 
užsidaro po paskutinio). Keitimui naudokite pirmo uždavinio funkciją ir 
preg_replace_callback(); */

$h1 = function (string|array $text) : string
{
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
};


$genText = md5(time());
$out = preg_replace_callback('/\d+/', $h1, $genText);

echo $out;
echo '<br>';




echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 4 <br>';
echo '----------<br>';
/* 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos 
argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) 
Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių; */
function divisor(int $digit) : int
{
    if ($digit === 0 || $digit === 1) {
        return 1;
    }
    if ($digit === 2) {
        return 0;
    }
    $divisors = range(2, $digit - 1);
    $divCounter = 0;
    foreach ($divisors as $div) {
        if ($digit % $div === 0) {
            $divCounter++;
        }
    }
    return $divCounter;
}


echo '--------Kitas variantas--------<br>';
echo '<br>';

function numberis($number) {
    $count = 0;
    for ($i = 2; $i < $number ; $i++) { 
        if ($number % $i === 0) {
            $count++;
        } 
        if ($count === 0){
            return 'Dalyba negalima.';
        }
    }       
     return "Skaičius: $number dalijasi iš $count sveikų skaičių.";
}

$skaicius = rand(2, 150);

echo numberis($skaicius);
echo '<br>';




echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 5 <br>';
echo '----------<br>';
/* 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai 
skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos 
kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją. */

$mas100 = [];

foreach (range(1, 100) as $_) {
    $mas100[] = rand(33, 77);
}

usort($mas100, function($a, $b) {
    static $cache = [];

    if (!isset($cache[$a])) {
        $cache[$a] = divisor($a);
    }
    if (!isset($cache[$b])) {
        $cache[$b] = divisor($b);
    }
    return $cache[$b] <=> $cache[$a];
});

print_r($mas100);        //_d($mas100);



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 6 <br>';
echo '----------<br>';
/* 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai 
skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo 
ištrinkite pirminius skaičius. */


/*  Irmanto  neveikia
$masyvas = [];
foreach(range(1, 100) as $_) {
    $masyvas[] = rand(333, 777);
}
foreach ($masyvas as $key => $value) {
    if(isPrime($value) == 0) {
        unset($masyvas[$key]);
    }
}
print_r($masyvas);
*/



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 7 <br>';
echo '----------<br>';
/* 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, 
išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o 
paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir 
pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. 
Paskutinio masyvo paskutinis elementas yra lygus 0; */

function doArray($limit) {
    if (--$limit < 0) {
        return 0;
    }
    $masyvas = [];
    $random = rand(10, 20);
        foreach(range(1, $random) as $key => $value) {
            if($random - 1 == $key) {
                $masyvas[] = doArray($limit);
            } else {
                $masyvas [] = rand(0, 10);
            }
        }
    return $masyvas;
}

_dc(doArray(rand(10, 30)));




echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 8 <br>';
echo '----------<br>';
/* 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
Skaičiuoti reikia visuose masyvuose ir submasyvuose. */

function calc($masyvas) {
    $sum = 0;
    foreach($masyvas as $key => $value) {
        if(is_array($value)) {
            cal($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
} 

_d(calc($masyvas), '8 uzduotis');

echo '<br>';
echo '-----kitas variantas-----<br>';
echo '<br>';

function sumRecursiveArray($array)
{
    static $sum = 0;
    foreach ($array as $value) {
        if (!is_array($value)) {
            $sum += $value;
        } else {
            sumRecursiveArray($value);
        }
    }
    return $sum;
}

_d(sumRecursiveArray($masyvas3));




echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 9 <br>';
echo '----------<br>';
/* 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai 
skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas 
ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį 
skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia 
pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti 
elemento. */

$masyvas = [];
    foreach(range(1, 3) as $_) {
        $masyvas [] = rand(1, 33);
    }
    
    while (isPrime($masyvas[(count($masyvas) - 1)]) > 0 || 
           isPrime($masyvas[(count($masyvas) - 2)]) > 0 || 
           isPrime($masyvas[(count($masyvas) - 3)]) > 0) {
        $masyvas[] = rand(1, 33);
    }

    _d($masyvas,);


echo '<br>';
echo '-----kitas variantas-----<br>';
echo '<br>';

    foreach (range(1, 3) as $key => $value) {
        $masyvas[] = rand(1, 33);
    }
    
    $run = 1;
    $from = 0;
    while ($run == 1) {
    
        $prime = true;
        $row = 0;
        for ($i = $from; $i < count($masyvas); $i++) {
    
            if (modulus($masyvas[$i]) == 0 && $masyvas[$i] != 1) {
                $row++;
            } else {
                $prime = false;
            }
        }
    
        if ($prime == false) {
            $from++;
            $masyvas[] = rand(1, 33);
        }
        if ($row == 3) {
            $run = 0;
        }
    }
    _d($masyvas);



echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 10 <br>';
echo '----------<br>';
/* 10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, 
kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo 
(ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite 
masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl 
paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską 
kartokite. */







echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr 11 <br>';
echo '----------<br>';
/* 11. Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. 
Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai. Santykis 
skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį 
nei masyvai. Reikšmių masyvų ilgis nuo 1 iki 5, o reikšmės analogiškos 
(nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai) ir t.t. 
kol visos galutinės reikšmės bus skaičiai ne masyvai. Suskaičiuoti kiek 
elementų turi masyvas. Suskaičiuoti masyvo elementų (tie kurie ne masyvai) 
sumą. Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . 
Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje 
yra skaičiai. Kiekvienas div elementas turi savo unikalų id ir unikalią 
background spalvą (spalva pvz nepavaizduota). pvz: <div id=”M1”>10, 46, 
67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 
</div> </div> */