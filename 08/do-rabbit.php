<?php

$rabbit = file_get_contents(__DIR__.'/rabbit.jpg');

header('Content-Type: image/png'); 

//header('Bla-Bla: ku-ku');

echo $rabbit;