<?php

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

$account = ['id' => $_POST['id'], 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];

$accounts[] = $account;

setMessage('Sąskaita atidaryta '.$_GET['id']);
file_put_contents(__DIR__. '/accounts.json', json_encode($accounts));
redirect();

