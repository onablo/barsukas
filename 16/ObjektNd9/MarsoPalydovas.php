<?php
// 9. (STATIC) Sukurkite klasę MarsoPalydovas.  
// Kontroliuokite objekto kūrimą iš klasės naudodami 
// statinį metodą. Padarykite taip, kad iš viso būtų
// galima sukurti tik du objektus iš šitos klasės. 
// Pirmam sukuriamam objektui įrašykite privačią 
// savybę title lygią stringui “Deimas”, o antram 
// tokią pat savybę tik lygią stringui “Fobas”. 
// Bandant sukurti trečią objektą, turėtų būti 
// grąžinamas vienas iš anksčiau sukurtų objektų 
// parinktas atsitiktine tvarka.


//Deimas => Siaubas
//Fobas => Baimė

class MarsoPalydovas {

    private static $palydovai = [];
    private $title;

    private function __construct($name)
    {
        $this->title = $name;
    }

    public static function palydovas() 
    {
        if (!isset(self::$palydovai[0])) {
            return self::$palydovai[0] = new self('Deimas');
        }
        if (!isset(self::$palydovai[1])) {
            return self::$palydovai[1] = new self('Fobas');
        }
        return self::$palydovai[rand(0, 1)];
    }

}