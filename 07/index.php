<?php
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = 1;
    }
}
$max = 0;
foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        if ($val2 > $max) {
            $max = $val2;
            $big = $index1;
            $small = $index2;
        }
    }
}
_d($masyvas, 'masyvas');
_d($max, 'max');
_d("$big - $small", 'coord');
$sums = [];
foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
    }
}
_d($sums);
$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        
        $masyvas2[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}
usort($masyvas2, function($a, $b) {
$ak = (int) in_array('K', $a);
$bk = (int) in_array('K', $b);
if ($ak + $bk == 1) {
    return $bk <=> $ak;
}
return count($a) <=> count($b);

});

_d($masyvas2); 
_d($masyvas2);


$m = [
    ['A', 'B'],
    ['U', 'P'],
    ['T', 'H'],
    ['C', 'A']
];

_d($m);

usort($m, function($a, $b) {
    return -($a[0].$a[1] <=> $b[0].$b[1]);
});

_d($m); 





$rabbit = file_get_contents(__DIR__.'/rabbit.png');

header('Content-Type: image/png'); 

header('Bla-Bla: ku-ku');

echo $rabbit; 