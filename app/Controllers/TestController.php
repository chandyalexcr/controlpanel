<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TestController {
  
  protected $container;
  
  function index(Request $request, Response $response) {
    $response->getBody()->write("Test Controller index");
    return $response;
  }
}