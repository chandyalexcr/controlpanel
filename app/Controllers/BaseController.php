<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class BaseController {
  
  protected $container;
  
  function index(Request $request, Response $response) {
    $response->getBody()->write("Server Panel Index");
    return $response;
  }
}