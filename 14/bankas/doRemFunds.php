<?php

$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ($account['amount'] < (int) $_POST['amount']) {        
            setMessage('Tiek lėšų nėra.');
            redirect();
        } elseif ((int) $_POST['amount'] < 0) {
            setMessage('Negali buti suma mažesnė už 0!');
            redirect();
        }
            
        $account['amount']-= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));  
        setMessage($_GET['id'].' nuskaičiuota:'.$_POST['amount'].'.');      
        redirect();
    }
}



