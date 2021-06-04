<?php
echo 'Nr1<br>';
echo '-------<br>';
$vardas = 'Ana';
$pavarde = 'Bloznelis';
$gimimoMetai = 1999;
$einamiejiMetai = 2021;
$amzius = $einamiejiMetai - $gimimoMetai;

echo "As esu $vardas $pavarde. Man yra $amzius metai.";

echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr2<br>';
echo '-------<br>';

$pirmas = rand(0, 4);
echo $pirmas;
echo '<br>';
$antras = rand(0, 4);
echo $antras;
echo '<br>';
$dalyba = 0;
if ($pirmas === 0 || $antras === 0) {
    echo ' Dalyba is nulio negalima.'; 
} elseif ($pirmas > $antras) {
    $dalyba = $pirmas / $antras;
    echo round($dalyba, 2);   
} elseif ($antras > $pirmas) {
    $dalyba = $antras / $pirmas;
    echo round($dalyba, 2);   
} elseif ($dalyba == 1) {
    echo ' Abu skaiciai yra vienodi.';
} 

echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr3<br>';
echo '-------<br>';
$pirmas = rand(0, 25);
echo $pirmas;
echo '<br>';
$antras = rand(0, 25);
echo $antras;
echo '<br>';
$trecias = rand(0, 25);
echo $trecias;
echo '<br>';
$vidurineReiksme = true;
if (($pirmas > $antras && $antras > $trecias ) || ($pirmas < $antras && $antras < $trecias)) {
    $vidurineReiksme = $antras;
} elseif (($antras > $trecias && $trecias > $pirmas) || ($antras < $trecias && $trecias < $pirmas)) {
    $vidurineReiksme = $trecias;
} elseif (($trecias > $pirmas && $pirmas > $antras) || ($trecias < $pirmas && $pirmas < $antras)) { 
    $vidurineReiksme = $pirmas;
} else {
    $vidurineReiksme = false;
echo 'Vidurinio skaiciaus nera.';
}
echo '<br>';
if ($vidurineReiksme != false) { 
echo "Vidurinis skaicius: $vidurineReiksme";
}

echo '<hr>';
echo '</div>';
echo '<br>';
echo 'Nr4<br>';
echo '-------<br>';
$a = rand(1, 10);
echo $pirmas;
echo '<br>';
$b = rand(1, 10);
echo $antras;
echo '<br>';
$c = rand(1, 10);
echo $trecias;
echo '<br>';