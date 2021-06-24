<?php

$users = [ 
    ['name' => 'Upe', 'pass' => md5('123')],
    ['name' => 'Jura', 'pass' => md5('123')],
    ['name' => 'Rukas', 'pass' => md5('123')],    
];

file_put_contents(__DIR__.'/users.json', json_encode($users));