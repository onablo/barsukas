<?php

$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ((int) $_POST['amount'] < 0) { 
            setMessage('Negali buti suma mažesnė už 0!');
            redirect();
        }
        if (empty($_POST["amount"])) {
            setMessage('Neužpildytas sumos laukelis!');
            redirect();
            
           
        }
            
        $account['amount']+= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        setMessage($_GET['id'].' pridėta:'.$_POST['amount'].'.');
        redirect();
    }
}

