<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// crud restfull routes

$routes->get('profiles-list', 'Profile::index');
$routes->get('profiles-form', 'Profile::create');
$routes->get('submit-form', 'Profile::store');
$routes->get('edit-view/(:num)', 'Profile::singleProfile/$1');
$routes->get('update', 'Profile::update');
$routes->get('delete/(:num)', 'Profile::delete/$1');
