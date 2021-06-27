<?php


class Zveris extends Miskas {

    protected $name;

    
    protected function papasakok() 
    { 
        echo "Aš esu žvėris vardu $this->name.";      
    }

    public static function getName()
    {
    return self::$name ?? self::$name = new self;
    }

    public function __construct($name)
    {
        $this->name = $name;
        
    }

    
}

