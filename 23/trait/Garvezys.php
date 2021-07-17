<?php
class Garvezys {

    use Dangus, Namas  {
        windows as public;
        Namas::sound2 insteadof Dangus; // custom overwrite
        Dangus::sound2 as soundDangus;
    }

    public $win = 55;

    public function sound()
    {
        echo '<h1>TU TŪŪŪŪŪŪŪŪŪŪŪ....</h1>';
    }

    public function doors()
    {
        echo '<h1>No doors</h1>';
    }


}