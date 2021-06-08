<?php

$masyvas = [];
                                // sukuriamas masyvas
foreach(range(1, 5) as $keyBig => $_) {
    foreach(range(1, 5) as $keySmall => $_) {
    $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
}
print_r($masyvas);              // Masyvas masyve
echo '<br>';
echo '------------------------2<br>'; 

foreach ($masyvas as $val) {    //grazina reiksmes su indexais
    print_r($val);
}
echo '<br>';
echo '------------------------3<br>'; 
                                //grazina tik reiksmes 
foreach ($masyvas as $val) {    //eina per eilutes
    foreach ($val as $val2) {   // eina per value
        print_r($val2);
        echo ', '; 
    }
}
echo '<br>';
echo '------------------------4<br>'; 


$masyvas = [];
                                
foreach(range(1, 5) as $keyBig => $_) {

    if (rand(0, 1)) { 
        foreach(range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
        }
    }
    else { 
        $masyvas[$keyBig] = rand(5, 25);
    }
}    
print_r($masyvas);           // netaisiklingas masyvas  
echo '<br>';
echo '------------------------5<br>'; 


// foreachint auksciau surasyto masyvo kodo
//neleidzia, nes ne visi Big elementai yra masyvai(netaisiklingas), 
// tam mes naudosim:

echo '<br>'; 
$masyvas = [];
                                
foreach(range(1, 5) as $keyBig => $_) {

    if (rand(0, 1)) { 
        foreach(range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
        }
    }
    else { 
        $masyvas[$keyBig] = rand(5, 25);
    }
}    
print_r($masyvas);             
echo '<br>';
echo '------------------------6<br>'; 


print_r($masyvas);
echo '<br>';
echo '----------<br>'; 
foreach ($masyvas as $val) { 
    if (is_array($val)) {
        foreach ($val as $val2) { 
            print_r($val2); 
            echo', ';            
        }
    }
    else {
        echo '<br>';
        print_r($val);      // atsispasdinam reiksmes is netaisiklingo masyvo
    }
}


echo '<br>';
echo '------------------------7<br>'; 

$masyvas = [];                               
foreach(range(1, 10) as $keyBig => $_) {
    foreach(range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
}    
$max = 5;
foreach($masyvas as $index1 => $val1) {
    foreach($val1 as $index2 => $val2) {
        if ($val2 > $max) {
            $max = $val2;
            $big = $index1;
            $small = $index2;
        }
    }
}
print_r($masyvas); 
echo '<br>';
echo '-------------------------8<br>'; 
print_r($max);  
//_d($max, 'max');
echo '<br>';
echo "$big - $small";
//_d("$big - $small", 'coord');
echo '<br>';
echo '--------Rusiavimas tinka ir vieng. ir dvig masyvams------9<br>'; 
echo '<br>';

$m = [
    ['A', 'B'],
    ['U', 'V'],
    ['T', 'X'],
    ['Z', 'B']
];

print_r($m); 
 usort($m, function($a,$b) {

    print_r($a);                  //_d($a,  'A masyvas');
    echo '<br>';
    print_r($b);                  //_d($b,  'B masyvas');
    echo '<br>';
    echo '<br>';

    return $a[0] <=> $b[0];     //isrusiuota p/l [0] elementa
 });            
 // return $a[0].$a[1] <=> $b[0]. $b[1];    // p/l kelis elementus(p/l A)
 // return -($a[0].$a[1] <=> $b[0]. $b[1]);    // p/l kelis elementus i kita puse(p/l Z)