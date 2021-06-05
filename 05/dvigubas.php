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
echo '------------------------1<br>'; 

foreach ($masyvas as $val) {    //grazina reiksmes su indexais
    print_r($val);
}
echo '<br>';
echo '------------------------2<br>'; 
                                //grazina tik reiksmes 
foreach ($masyvas as $val) {    //eina per eilutes
    foreach ($val as $val2) {   // eina per value
        print_r($val2);
    }
}
echo '<br>';
echo '------------------------3<br>'; 


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
echo '------------------------4<br>'; 
// foreachint auksciau surasyto masyvo kodo
//neleidzia, nes ne visi Big elementai yra masyvai(netaisiklingas), 
// tam mes naudosim:


echo '-----------------------------------------------------------<br>'; 
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
echo '-----------------------------------------------------------<br>'; 



foreach ($masyvas as $val) { 
    if (is_arrey($val)) {
        foreach ($val as $val2) { 
            print_r($val2);  
        }
    }
    else {
        print_r($val);      // atsispasdinam reiksmes is netaisiklingo masyvo
    }
}