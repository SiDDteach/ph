<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

$router->setDefaults([
    'namespace' => 'Controller',
    'controller' => 'index',
    'action' => 'index',
]);

$profile = new RouterGroup(
    [
        'module'     => 'blog',
        'controller' => 'index',
    ]
);

$router->add(
    '/admin/users/my-profile',
    [
        'controller' => 'users',
        'action'     => 'profile',
    ]
);

// Another route
$router->add(
    '/admin/users/change-password',
    [
        'controller' => 'users',
        'action'     => 'changePassword',
    ]
);

$router->handle();
