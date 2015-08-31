<?php
/*Frontend Routes*/
$router->addRoute('GET', '/', 'App\Controllers\PageController::home');
$router->addRoute('GET', '/about', 'App\Controllers\PageController::about');
$router->addRoute('GET', '/contact', 'App\Controllers\PageController::contact');

/*Backend Routes*/
$router->addRoute('GET', '/admin','App\Controllers\Admin\DashboardController::index');
$router->addRoute('GET', '/admin/dashboard','App\Controllers\Admin\DashboardController::index');

$router->addRoute('GET', '/admin/login', 'App\Controllers\Admin\AuthController::login');
$router->addRoute('POST', '/admin/login', 'App\Controllers\Admin\AuthController::loginPost');

$router->addRoute('GET', '/admin/logout', 'App\Controllers\Admin\AuthController::logout');

