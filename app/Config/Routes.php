<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/user', 'User::index');
$routes->get('/user/create', 'User::create');
$routes->post('/user/store', 'User::store');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/user/update', 'User::update');
$routes->post('/user/delete/(:num)', 'User::delete/$1');
