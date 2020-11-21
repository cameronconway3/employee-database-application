<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'employees_table', '_controller' => 'App\\Controller\\EmployeeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employees' => [
            [['_route' => 'employee_form', '_controller' => 'App\\Controller\\EmployeeController::getFormAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'new_employee', '_controller' => 'App\\Controller\\EmployeeController::saveFormAction'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
