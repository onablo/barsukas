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

if (!isset($_GET['action'])&& $_SERVER['REQUEST_METHOD']== 'GET') {
    require __DIR__. '/accList.php';
}

// Sąskaitos papildymo atvaizdavimas GET

elseif ($_GET['action'] == 'add-funds'&& $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addFunds.php';
}

// Sąskaitos papildymo vykdymas POST

elseif ($_GET['action'] == 'add-funds'&& $_SERVER['REQUEST_METHOD']== 'POST') {
    require __DIR__. '/doAddFunds.php';
}

// Pinigų išemimo atvaizdavimas GET

elseif ($_GET['action'] == 'rem-funds'&& $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/remFunds.php';
}

// Pinigų išemimo vykdymas POST

elseif ($_GET['action'] == 'rem-funds'&& $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doRemFunds.php';
}

 // Naujos sąskaitos atidarymo atvaizdavimas GET

elseif ($_GET['action'] == 'add-account'&& $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addAccount.php';
} 

// Naujos sąskaitos atidarymo vykdymas POST

elseif ($_GET['action'] == 'add-account'&& $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddAccount.php';
} 

// Sąskaitos uždarymo vykdymas POST

elseif ($_GET['action'] == 'delete'&& $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}