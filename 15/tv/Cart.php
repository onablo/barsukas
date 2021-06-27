<?php

class Cart {

    private static $obj;

    public static function getCart()
    {
        return self::$obj ?? self::$obj = new self;
    }

    private function __construct(){}



}