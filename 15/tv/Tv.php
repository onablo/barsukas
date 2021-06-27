<?php

class Tv {

    protected $istrizaine;
    protected static $kanalai = [1 => 'TV3', 2 => 'LRT', '3' => 'Polonia'];


    public function __construct($ist)
    {
        $this->istrizaine = $ist;
    }

    public function rodyti($kanalas)
    {
        echo '<h1>RODOM: '.self::$kanalai[$kanalas].'</h1>';
    }

    public static function keistiPrograma($kanalas, $pavadinimas)
    {
        if (isset(self::$kanalai[$kanalas])){
            self::$kanalai[$kanalas] = $pavadinimas;
        }
    }

    public static function pridetiPrograma($kanalas, $pavadinimas)
    {
        if (!isset(self::$kanalai[$kanalas])) {
            if (is_integer($kanalas)) {
                if ($kanalas > 0 && $kanalas <= 500) {
                    self::$kanalai[$kanalas] = $pavadinimas;
                }
            }

        }
    }

} 