<?php

$labas = 'Labas';

function vardas($par1 = 10, $par2 = 10) {   
    //kai truksta argumento, tai parametras 
    //paima defoltine reiksme


    // global $labas, $viso; // Nekoks budas
    echo $GLOBALS['labas']; // totalus oldskulas,, nenaudotina
    //echo $labas;          // nespausdina
    $viso = 'Viso gero';
    $sumav = $par1 + $par2;
    return $sumav;

}


$suma = vardas(8, 25, 88);  // argumentu t.b. tiek pat arba daugiau
echo $suma;
echo '<br>';

$suma = vardas();           // be parametru, tai paims defoltine reiksme
echo $suma;
echo '<br>';

$suma = vardas(56, 25);
echo $suma;
echo '<br>';


echo '---------------------2<br>';

// F, kuri priima daug argumentu
// function calc( ...$arg)

// kadangi priima daugiau nei dvi reiksmes - tai patampa masyvu
function calc($action, ...$arg) {          

print_r($arg);
echo '<br>';
$answ = 0;
    foreach ($arg as $val) {
        if ($action == '+') {       //vietoje '+' g.b.: 'plius'
            $answ += $val;
        }
        elseif ($action == '-') {   //  g.b.: 'minus'
            $answ -= $val;
        }
    }
    if ($action == 'jonas') {
        return 'labas Jonai';
    }
    return $answ;
}

print_r(calc('-', 1, 5, 8));        //_d(calc('-', 1, 5, 8));
echo '<br>';

                        //galima kviesti ir be argumentu:
                        //calc()
    
echo $suma;
//echo $viso;
echo '<br>';

function stepper() 
{
    static $x = 0;                  //paduoda 0 tik viena k. iskvietus funkcija
    print_r( __FUNCTION__ );        // _d( __FUNCTION__ );
    return ++$x;
}

print_r( stepper() ); 
echo '<br>';
       //_d( stepper() );
echo $suma;
echo '<br>';

print_r( stepper() );       //_d( stepper() );
echo '<br>';
      
echo $suma;
echo '<br>';

print_r( stepper() );        //_d( stepper() );
echo '<br>';

echo $suma;
echo '<br>';

print_r( stepper() );        //_d( stepper() );
echo '<br>';

echo $suma; 
echo '<br>';
