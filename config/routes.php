<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {

    $app->post('/users', \App\Action\UserCreateAction::class);
};