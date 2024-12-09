<?php
//return [
//    '/workopia/public/' => 'controllers/home.php',
//    '/listings' => 'controllers/listings/index.php',
//    '/listings/create' => 'controllers/listings/create.php',
//    '404' => 'controllers/error/404.php'
//];

$router->get('/workopia/public/', 'controllers/home.php');
$router->get('/workopia/public/listings','controllers/listings/index.php');
$router->get('/workopia/public/listings/create','controllers/listings/create.php');
$router->get('404', 'controllers/error/404.php');
