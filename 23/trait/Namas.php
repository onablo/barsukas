<?php

trait Namas {

    public $win = 55;

    protected static function windows()
    {
        echo '<h1>8 windows</h1>';
    }

    public function sound2()
    {
        echo '<h1>Namas griūva</h1>';
    }

    abstract public function doors();

}