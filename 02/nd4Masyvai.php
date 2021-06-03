<?php
echo 'Nr1<br>';
echo '-------<br>';
//$keys = array(1, 30);
//$value =array_fill_keys($keys, (rand(5, 25)));
//foreach ($masyvas as $ind => &$val) {
//    $val = rand(5, 25);
//}

$arraySize = 30;
 
$masyvas = array_fill(0, $arraySize, ' ');
 
foreach ($masyvas as $index => &$value) {
 
    $value = rand(5, 25);
    echo "$index =>$value" . '<br>';
}
echo '</div>';
echo '<hr>';

echo '<br>';
echo 'Nr2<br>';
echo '-------<br>';
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