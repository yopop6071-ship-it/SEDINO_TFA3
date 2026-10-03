<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('customers', 'CustomerAccounts::index');
$routes->get('users', 'UserAccounts::index');

$routes->get('customers/new', 'CustomerAccounts::create');
$routes->post('customers/store', 'CustomerAccounts::store');

$routes->get('users/new', 'UserAccounts::create');
$routes->post('users/store', 'UserAccounts::store');

$routes->get('customers/edit/(:num)', 'CustomerAccounts::edit/$1');
$routes->post('customers/update/(:num)', 'CustomerAccounts::update/$1');

$routes->get('users/edit/(:num)', 'UserAccounts::edit/$1');
$routes->post('users/update/(:num)', 'UserAccounts::update/$1');