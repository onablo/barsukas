<?php
define('ENTER', true);
require __DIR__ . '/bootstrap.php';

// Controllers

require DIR.'app/AgurkaiController.php';



$uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);      //vertimas i masyva

//_d($uri);


// ROUTER

if ($uri[0] == 'testas' && isset($uri[1])) {
    (new AgurkaiController)->agurkuTest($uri[1]);
}
elseif ($uri[0] === '' && count($uri) === 1) {
    (new AgurkaiController)->index();
}



else {
    http_response_code(404);
    echo '<h1>404 PAGE NOT FOUND</h1>';
} 