<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

//capturando a url na posicao zero
$url = explode("?", $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName){
    return [
        'controller'=>$controllerName, 
        'method'=>$methodName,
    ];
}

$routes = [
    //agora pode-se criar qualquer rota e passar o controle e o metodo 
    '/' => createRoute(indexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction')


];

if(false === isset($routes[$url])){
    (new ErrorController())->notFoundAction();
    exit;
}

//capturando a url dentro da rota e armazenando na variavel
$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();




// $c = new IndexController();
// $c->indexAction();
// $c->loginAction();

// $p = new ProductController();
// $p->listAction();
// $p->addAction();
// $p->editAction();
