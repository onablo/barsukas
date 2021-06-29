<?php

include __DIR__. './Miskas.php';

class Zveris extends Miskas{

    protected $name;

    protected function papasakok() {
        echo "Aš esu žvėris vardu $this->name.";
        parent::papasakok();
    }

    public function pasakojimas() {
        $this->papasakok();
    }

}
