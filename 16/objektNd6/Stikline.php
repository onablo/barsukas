<?php
// 6. Sukurti klasę Stikline. Sukurti privačią savybę turis 
// ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų 
// savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei 
// pilamas kiekis- kiekis netelpa ir būna lygus tūriui. 
// Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant 
// išpilamas visas kiekis, tas kas netelpa, nuteka per 
// stalo viršų. Sukurti tris stiklinės objektus su tūriais: 
// 200, 150, 100. Didžiausią pripilti pilną ir tada ją 
// ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

class Stikline {

    private $turis, $kiekis = 0;

    public function __construct($turis) 
    {
        $this->turis = $turis;
    }


    public function ipilti($kiekis)
    {               //php matematine funkcija grazinanti mazesni argumenta
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;
    }

    public function ispilti()
    {
        $kiekis = $this->kiekis; //reikia grazinti
        $this->kiekis = 0;       //tada nunulinam
        return $kiekis;          //ir grazinam
    }

}