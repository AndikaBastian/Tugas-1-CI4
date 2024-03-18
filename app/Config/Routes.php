<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoroute(true);
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'home::tentang');

