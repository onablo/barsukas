<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as $index => $account) {
    if ($account['id'] == $id) {
        unset($accounts[$index]);
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));

        redirect();
    }
} 