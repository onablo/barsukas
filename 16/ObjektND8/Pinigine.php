<?php
// 8. Patobulinti 2 uždavinio piniginę taip, kad būtų 
// galima skaičiuoti kiek piniginėje yra monetų ir kiek 
// banknotų. Parašyti metodą monetos(), kuris 
// skaičiuotų kiek yra piniginėje monetų ir metoda 
// banknotai() - popierinių pinigų skaičiavimui.


class Pinigine {
    private $popieriniaiPinigai = [];
    private $metaliniaiPinigai = [];


    public function ideti(float $kiekis) 
    {
        if ($kiekis < 2 ) {
            $this->metaliniaiPinigai[] = $kiekis;
        }
        else {
            $this->popieriniaiPinigai[] = $kiekis;
        }
    }

    public function skaiciuoti()
    {
        echo array_sum($this->metaliniaiPinigai) + array_sum($this->popieriniaiPinigai);
        echo '<br>';
    }

    public function monetos()
    {
        echo count($this->metaliniaiPinigai);
        echo '<br>';
    }

    public function banknotai()
    {
        echo count($this->popieriniaiPinigai);
        echo '<br>';
    }
} 