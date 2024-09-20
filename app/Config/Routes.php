<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /*USER LOGIN AND REGISTER*/

 $routes->get('/', '\App\Controllers\Auth\UserLoginController::index');
 $routes->post('login', '\App\Controllers\Auth\UserLoginController::login');
 $routes->post('register', '\App\Controllers\Auth\UserLoginController::register');

/*DASHBOARD*/

$routes->get('dashboard', '\App\Controllers\Home\HomeController::initialPageLoading');
$routes->get('yearmonthfilter', '\App\Controllers\Home\HomeController::yearMonthFilter');
