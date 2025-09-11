<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home');
$routes->get('/advertising', 'Advertising');
$routes->post('/pesan', 'Advertising::pesan');
$routes->get('/contractor', 'Contractor::index');
