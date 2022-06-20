<?php

use Classes\ProductController;
use Classes\View;

include_once 'Router/Request.php';
include_once 'Router/Router.php';
include 'vendor/autoload.php';


$router = new Router(new Request());

$router->get('/', function ($request) {
    $view = new View;
    $view->render('product_list');
});

$router->get('/productList', function ($request) {
    $view = new View;
    $view->render('product_list');
});

$router->get('/add', function ($request) {
    $view = new View;
    $view->render('add_product');
});


$product = new ProductController();
$product->createArray($router);
$product->checkBox($router);
