<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {

    $app->post('/data', '\App\Action\OnlineTest:insertData');

    $app->get('/message', '\App\Action\OnlineTest:giveMessage');

    $app->post('/user', '\App\Action\OnlineTest:insertUserDetails');
};