<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Mastering
// $routes->get('a', 'Home::index');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('nav', 'DashboardController::navf');
$routes->get('maincontent', 'DashboardController::mainContentf');
$routes->get('footer', 'DashboardController::footerf');


//category
$routes->get('cateAdd', 'CateController::index');
$routes->post('cateAdd', 'CateController::cateAdd');
$routes->get('cateView', 'CateController::fetchcat');
$routes->get('category/delete/(:num)', 'CateController::delete/$1');
$routes->get('category/edit/(:num)', 'CateController::edit/$1');
$routes->put('category/update/(:num)', 'CateController::update/$1');




//expanse
$routes->get('exAdd', 'ExController::index');
$routes->post('exAdd', 'ExController::exAdd');
$routes->get('exView', 'ExController::fetchcat');
$routes->get('exView/edit/(:num)', 'ExController::edit/$1');
$routes->put('ex/update/(:num)', 'ExController::update/$1');
$routes->get('ex/delete/(:num)', 'ExController::delete/$1');

//income
$routes->get('inAdd', 'InController::index');
$routes->post('inAdd', 'InController::inAdd');
$routes->get('inView', 'InController::fetchcat');
$routes->get('income/edit/(:num)', 'InController::edit/$1');
$routes->put('income/update/(:num)', 'InController::update/$1');
$routes->get('income/delete/(:num)', 'InController::delete/$1');

//author
// $routes->get('/', 'Register::index');
$routes->get('/signup', 'Register::index');
$routes->match(['get', 'post'], 'Register/store', 'Register::store');
$routes->match(['get', 'post'], 'Login/loginAuth', 'Login::loginAuth');
$routes->get('logout', 'Login::logout');
$routes->get('/', 'Login::index');
$routes->get('/signin', 'Login::index');
$routes->get('/dashboard', 'Home::index',['filter' => 'authGuard']);












