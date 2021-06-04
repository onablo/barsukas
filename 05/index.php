<?php
$masyvas['zurnalai'] = 'seni zurnalai';
echo '<pre>';
print_r($masyvas);

echo '------------------------1<br>'; 
array_push($masyvas, 'knyga');           //masyvo papildymas, inex eil.tv.
array_push($masyvas, 'albumas');
print_r($masyvas);
echo '------------------------2<br>';

$masyvas[] = 'laikrasciai';         //masyvo papildymas, index eil.tv.(naudojamas dazniau)
array_push($masyvas, 'albumas');
$masyvas[1000000] = 'laikrasciai';      //masyvo papildymas, index Nr [nurodytas]
print_r($masyvas);
echo '------------------------3<br>';
//$masyvas[1] = 'zodynas';
 
//print_r($masyvas);
//jeigu pirmam elementui irasom [1] tai masyvo pradzia bus nuo 1
 
$masyvas[] = 'lankstinukai';
$masyvas[''] = 'Nieko';
$masyvas[''] = 'Nieko2';            // irasys paskutini su tuo pac.index
 
print_r($masyvas);
echo '------------------------4<br>'; 
$masyvas2 = ['pele', 'kate' => 'tupi', 'suo']; //kate-index, pele[0], suo[1]
print_r($masyvas2);
 
$masyvas3 = ['pele', '9' => 'tupi', 'suo'];    //pele[0], tupi[9], suo[10]
print_r($masyvas3);
 
$masyvas4 = array('pele', 'tupi', 'suo');      //indeksai[0],[1],[2]
print_r($masyvas4);
 
$masyvas5 = array('pele', 'tupi', 'suo')[rand(0, 2)];  //suo
print_r($masyvas5);
 
echo '<br>';
echo '----------------------------------<br>';
echo '-----CIKLAI-----------------------<br>';
// masyvams for ciklas netaikomas
 
asort($masyvas4);                           //isrusiuoja abc-tvarka
print_r($masyvas4);
echo '--------------------5<br>';  
foreach ($masyvas as $val) {
    echo "$val" . '<br>';
}
print_r($masyvas4);
echo '--------------------6<br>'; 
 
foreach ($masyvas as $ind => $val) {
    echo "$ind => $val" . '<br>';           //isrusiuoja index eil tvarka
}
echo '--------------------7<br>';       

foreach ($masyvas as $ind => &$val) {       // 0 reiksmes priskirimas
    $val = 0;
}
print_r($masyvas);
echo '--------------------8<br>';  
 
echo '------<br>';

foreach ($masyvas as $ind => $val) {    // kitas variantas, grazesnis su[]
    echo "$ind => $val" . '<br>';
    $masyvas[$ind] = 0;
}
print_r($masyvas);
echo '--------------------9<br>';  
 
echo '<br>';
echo '-------------<br>';
$A = 5;
$B = $A;
$C = 75;
$A = 6;
//echo $A;                              
echo '<br>';                            
//echo $B;
$A = 5;
$B = &$A;
$A = 6;
$B = 10;
echo $A;                                // 10
echo '<br>';
echo $B;
echo '<br>';                            // 10
echo '-------------<br>';
$colors = ['red', 'green', 'blue', 'yellow'];
print_r($colors);                       // stulpeliu atsp. masyva
 
foreach ($colors as &$value) {}
 
unset($value);
 
foreach ($colors as $index => $value) {
    echo 'Indeksas: ' . $index . ' Reiksme: ' . $value . '<br>';
}




$arraySize = 30;
 
$masyvas = array_fill(0, $arraySize, ' ');
 
foreach ($masyvas as $index => &$value) {
 
    $value = rand(5, 25);
    echo "$index =>$value" . '<br>';
}

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

reset ($masyvas);
do {
    print_r(current($masyvas), (key($masyvas));    
    next($masyvas);
}
while (key($masyvas)!==null);

*/