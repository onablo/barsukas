<?php

$account = ['id' => rand(10000000000, 99999999999), 'amount' => 0]; 
$accounts[] = $account;

file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));

redirect();
