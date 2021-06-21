<?php

$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ($account['amount'] < (int) $_POST['amount']) {        
            setMessage('Tiek lėšų nėra.');
            redirect();
        }
        $account['amount']-= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));  
        setMessage($_POST['amount'].'- nuskaičiuota');      
        redirect();
    }
}



