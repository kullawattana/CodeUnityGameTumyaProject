<?php
//require 'Slim/Slim.php';
require 'vendor/slim/slim/Slim/Slim.php';
$app = new Slim();
$app->get('/hello', 'hello');
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();

function hello() {
    echo "Hello World.";
}
?>