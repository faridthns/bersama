<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/advertising', 'Advertising::index');
$routes->get('/contractor', 'Contractor::index');
