<?php

declare(strict_types=1);

use App\App;
use App\Container;
use App\Controllers\HomeController;
use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';

const VIEW_PATH = __DIR__ . '/../views';

$container = new Container();
$router = new Router($container);

$router
    ->get('/', [HomeController::class, 'index']);

$router
    ->post('/send', [HomeController::class, 'sendDelivery']);

$request = ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']];

(new App(
    $container,
    $router,
    $request
))->run();

