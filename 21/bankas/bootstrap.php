<?php
defined('ENTER') || die;
require __DIR__ .'/vendor/autoload.php';
//pagrindiniai settingai, bendri kintamieji visam kodui
session_start();

define('DIR', __DIR__.'/');
//pats auksciausias DIR, nereikks ..// 

//define('URL', 'http://localhost/barsukas/21/bankas/public/');
define('URL', 'http://bankas.com/');
//define('INSTALL_DIR', '/barsukas/21/bankas/public/');
define('INSTALL_DIR', '/');
