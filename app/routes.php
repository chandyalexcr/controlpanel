<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->get('/', 'BaseController:index');
$app->get('/test', 'TestController:index');