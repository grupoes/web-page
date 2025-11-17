<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/panel', 'Admin::login');
$routes->post('/acceder', 'Admin::acceso');

$routes->get('/home', 'Admin::home');
$routes->get('/contactos', 'Contacto::index');
