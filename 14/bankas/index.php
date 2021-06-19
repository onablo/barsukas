<?php
session_start();
function redirect() {
    header('Location: http://localhost/barsukas/14/bankas/');
    die;
}

function redirectToAction($action, $id = 0) 
{
    if ($id) {
        header('Location: http://localhost/barsukas/14/bankas/?action='.$action.'&id='.$id);
    }
    else {
        header('Location: http://localhost/barsukas/14/bankas/?action='.$action);
    }
    die;
}

// account list ['account nr' => 1, 'name' => Jonas, 'surname' => Jonaitis, 'personid' => 1, 'account balance' => 0]

if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}
$accounts = json_decode( file_get_contents(__DIR__.'/accounts.json'), 1);

// Sąskaitų sarašo atvaizdavimas GET

if (!isset($_GET['action'])&& $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/accountList.php';
}

// Sąskaitos pridėti atvaizdavimas GET

elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addFunds.php';
}

// Sąskaitos pridėti vykdymas POST

elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddFunds.php';
}

// Pinigų nuskaičiuoti atvaizdavimas GET

elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/remFunds.php';
}

// Pinigų nuskaičiuoti vykdymas POST

elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doRemFunds.php';
}

 // Naujos sąskaitos atidarymo atvaizdavimas GET

elseif ($_GET['action'] == 'add-account' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addAccount.php';
} 

// Naujos sąskaitos atidarymo vykdymas POST

elseif ($_GET['action'] == 'add-account' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddAccount.php';
} 

// Sąskaitos uždarymo vykdymas POST

elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}