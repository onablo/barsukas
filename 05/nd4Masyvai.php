<?php
echo 'Nr1<br>';
echo '-------<br>';

$arraySize = 30;
 
$masyvas = array_fill(0, $arraySize, ' ');
 
foreach ($masyvas as $index => &$value) {
 
    $value = rand(5, 25);
    echo "$index =>$value" . '<br>';
}
echo '-------<br>';
echo 'Destytojo variantas';

$masyvas = [];

foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
//_d($masyvas);
echo $masyvas;

echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr2<br>';

$value = rand(5, 25);
//$count = 0;
if ($value > 10) {
    $value++;
    foreach ($masyvas as $index => $value) {
    }echo "$index =>$value" . '<br>';
}
echo '</div>';
echo '<hr>';

echo '<br>';
echo 'Nr3<br>';
echo '-------<br>';

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
}

unset($value);
echo $raidziuMasyvas;