<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home');
$routes->get('/duniaadvertising', 'Advertising');
$routes->post('/pesan', 'Advertising::pesan');
$routes->get('/bintarajayapersada', 'Contractor::index');
