<?php

$account = ['id' => rand(10000000, 99999999), 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];
$accounts[] = $account;
setMessage('Sąskaita atidaryta');
file_put_contents(__DIR__. '/accounts.json', json_encode($accounts));
redirect();
