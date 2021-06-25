<?php

$account = ['id' => "LT98730001007276". rand(1000, 9999), 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];

$accounts[] = $account;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        setMessage('Neužpildytas vardo laukelis!');
            redirect();      
    }
    if (empty($_POST["surname"])) {
        setMessage('Neužpildytas pavardės laukelis!');
            redirect();
    }
    if (empty($_POST["personID"])) {
        setMessage('Neužpildytas asmens kodo laukelis!');
            redirect();
    }      
}  

setMessage('Sąskaita atidaryta '.$_GET['id']);
file_put_contents(__DIR__. '/accounts.json', json_encode($accounts));
redirect();

