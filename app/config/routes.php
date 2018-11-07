<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

$profile = new RouterGroup(
    [
        'module'     => 'profile',
        'controller' => 'index',
    ]
);

$router->add(
    '/profile',
    [
        'controller' => 'profile',
        'action'     => 'register',
    ]
);

// Another route
/*$router->add(
    '/admin/users/change-password',
    [
        'controller' => 'users',
        'action'     => 'changePassword',
    ]
);*/


return $router;
