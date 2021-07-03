<?php
namespace Zoo;
use Zoo\Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as B;

require __DIR__ .'/vendor/autoload.php';

// spl_autoload_register(function ($class) {    -f. signalizuoja, kad kazko neranda, pvz klases
//     $prefix = 'Zoo\\';           -egzist. namespace, kuris neatitinka jokio realaus folderio
//     $base_dir = __DIR__ . '/';                       -egzist. folderis, kurio nera namespace
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $prefix = 'Australia\\';
//     $base_dir = __DIR__ . '/australai/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $prefix = 'Belgium\\';
//     $base_dir = __DIR__ . '/belgai/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $prefix = 'Zoo\\';
//     $base_dir = __DIR__ . '/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });



// require __DIR__ . '/australai/Animal.php';
// require __DIR__ . '/belgai/Animal.php';
// require __DIR__ . '/Animal.php';






echo Animal::sayUUID();
// new Animal;
echo AnimalA::$go;
// new Belgium\Animal;

echo Animal::$go;
echo B::$go;