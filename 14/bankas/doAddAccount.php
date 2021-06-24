<?php

$account = ['id' => "LT98730001007276". rand(1000, 9999), 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];

$accounts[] = $account;
setMessage('Sąskaita atidaryta '.$_GET['id']);
file_put_contents(__DIR__. '/accounts.json', json_encode($accounts));
redirect();

