<?php
define('ENTER', true);
require __DIR__ . '/bootstrap.php';

// Controllers

require DIR.'app/AgurkaiController.php';



$uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);   //pasalinam instaliacijos folderi, pakeisdami ji i nieka, naudojant formule po kablelio
//sekanti eilute: atskiriam komponentus, atskirtus /
$uri = explode('/', $uri);      //vertimas i masyva

//_d($uri);


// ROUTER

if ($uri[0] == 'testas' && isset($uri[1])) {
    (new AgurkaiController)->agurkuTest($uri[1]);
}
elseif ($uri[0] === '' && count($uri) === 1) {  //jeigu mes neturime nei vieno uri, tai einam i agurkaikontr indexa
    (new AgurkaiController)->index();
}



else {                                      //tokio puslapio nera - php status header
    http_response_code(404);
    echo '<h1>404 PAGE NOT FOUND</h1>';
} 