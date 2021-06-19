<?php

$account = ['id' => rand(10000000000, 99999999999), 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];
$accounts[] = $account;

file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));

redirect();
