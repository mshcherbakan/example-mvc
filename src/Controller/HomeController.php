<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class HomeController
{
    public function index(Request $request, Response $response)
    {
        $html = view('home');
        $response->getBody()->write($html);
        return $response;
    }
}