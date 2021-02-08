<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/tasks' => [[['_route' => 'getTasks', '_controller' => 'App\\Controller\\TaskController::getTasks'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'create', '_controller' => 'App\\Controller\\TaskController::create'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/edit/([^/]++)(*:21)'
                .'|/delete/([^/]++)(*:44)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], null, null, false, true, null]],
        44 => [
            [['_route' => 'delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
