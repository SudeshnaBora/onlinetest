<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {

    $app->post('/user', \App\Action\UserCreateAction::class);

    $app->post('/data', \App\Action\OnlineTest::class);
};