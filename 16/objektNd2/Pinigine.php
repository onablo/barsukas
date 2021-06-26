<?php
// 2. Sukurti klasę Piniginė. Sukurti dvi privačias savybes 
//popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą 
//ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu 
//kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, 
//jeigu didesnis nei 2 prie popieriniaiPinigai. Parašykite 
//metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų 
//popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės 
//objektą ir pademonstruoti veikimą. Nesvarbu kokios 
//popierinės kupiūros ir metalinės monetos egzistuoja 
//realiame pasaulyje.


class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;


    public function ideti(float $kiekis) 
    {
        if ($kiekis < 2 ) {
            $this->metaliniaiPinigai += $kiekis;
        }
        else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo '<br>';
    }
} 




