<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as $index => $account) {
    if ($account['id'] == $id) {
        if (($account['amount']) == 0) {
            setMessage('Sąskaita uždaryta');
            unset($accounts[$index]);
        }
        else {
            setMessage('Sąskaitos uždaryti negalima, nes yra nenuskaičiuotų lėšų');
            redirect();
        }  
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));        
        redirect();
    }
} 

