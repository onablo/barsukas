<?php
session_start();
function redirect() {
    header('Location: http://localhost/barsukas/15/bankas/');
    die;
}

// account data ['account nr' => 1, 'name' => Jonas, 'surname' => Jonaitis, 'person ///// id' => 1, 'account balance' => 0]

if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode( file_get_contents(__DIR__.'/accounts.json'), 1);

// Sąskaitų sarašo atvaizdavimas GET

if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/accList.php';
}

// Lėšų pridėjimo atvaizdavimas GET

elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addFunds.php';
}

 // Naujos sąskaitos atidarymo atvaizdavimas GET

elseif ($_GET['action'] == 'add-account' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addAccount.php';
} 

// Naujos sąskaitos atidarymo vykdymas POST

elseif ($_GET['action'] == 'add-account' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddAccount.php';
} 