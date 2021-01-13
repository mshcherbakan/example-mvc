<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

$app->get('/hello', function (Request $request, Response $response) {
    $response->getBody()->write('<h1>Hello World</h1>');
    return $response;
});

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('<h1>endpoint 1</h1>');
    return $response;
});

$app->get('/test-log', function (Request $request, Response $response) {

    $log = new Logger('name');
    $log->pushHandler(new StreamHandler(__DIR__ .'/logs/errors.log', Logger::WARNING));

    $log->warning('Foo');
    $log->error('Bar');

    $response->getBody()->write('OK');
    return $response;
});

$app->run();