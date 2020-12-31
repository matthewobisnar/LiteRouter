<?php
require __DIR__ . "/vendor/autoload.php";

$router = new LiteRouter\Route\Router(__DIR__);

$router->map(['GET'], 'admin/data', function (){

});

$router->map(['GET','POST'], 'admin/{controller}/{action}', function() {

});



?>