<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_employee_index' => [[], ['_controller' => 'App\\Controller\\EmployeeController::index'], [], [['text', '/']], [], []],
    'app_employee_employees' => [[], ['_controller' => 'App\\Controller\\EmployeeController::employees'], [], [['text', '/employees']], [], []],
];
