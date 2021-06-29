<?php
// 8. Patobulinti 2 uždavinio piniginę taip, kad būtų 
// galima skaičiuoti kiek piniginėje yra monetų ir kiek 
// banknotų. Parašyti metodą monetos(), kuris 
// skaičiuotų kiek yra piniginėje monetų ir metoda 
// banknotai() - popierinių pinigų skaičiavimui.

class Pinigine {

    private $popieriniaiPinigai;
    private $banknotai;
    private $metaliniaiPinigai;
    private $monetos;

    public function ideti($kiekis) {
        if(is_integer($kiekis)) {
            if($kiekis < 2) {
                $this->metaliniaiPinigai += $kiekis;
                $this->monetos();
            } else {
                $this->popieriniaiPinigai += $kiekis;
                $this->banknotai();

            }
        } else {
            echo 'Pinigai turi buti skaicius';
        }
    }

    public function monetos() {
        $this->monetos++;
    }

    public function banknotai() {
        $this->banknotai++;
    }

    public function skaiciuoti() {
        echo "Popieriniai: $this->popieriniaiPinigai, metaliniai: $this->metaliniaiPinigai.";
        echo '<br>';
        echo "Monetu = $this->monetos, Banknotu = $this->banknotai.";
        return "Suma = " . $this->popieriniaiPinigai + $this->metaliniaiPinigai;
    }
}



    