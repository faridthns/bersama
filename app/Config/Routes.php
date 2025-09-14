<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home');
$routes->get('/duniaadvertising', 'Advertising');
$routes->post('/duniaadvertising/pesan', 'Advertising::pesan');
$routes->post('/bintarajayapersada/pesan', 'Contractor::pesan');
$routes->get('/bintarajayapersada', 'Contractor::index');
