<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/profile/register',
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
