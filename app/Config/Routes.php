<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/panel', 'Admin::login');
$routes->post('/acceder', 'Admin::acceso');
$routes->get('/logout', 'Admin::logout');

$routes->get('/home', 'Admin::home');
$routes->get('/contactos', 'Contacto::index');
$routes->get('/contactos/render', 'Contacto::render');
