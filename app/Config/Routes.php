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

$routes->get('/liam', 'Liam::index');
$routes->get('/diagnosticos', 'Admin::diagnosticos');
$routes->post('/savePregunta', 'Admin::savePregunta');
$routes->get('/listaPreguntas', 'Admin::listaPreguntas');
$routes->post('/reorderPreguntas', 'Admin::reorderPreguntas');
$routes->post('/deletePregunta', 'Admin::deletePregunta');
$routes->get('/listaOpciones', 'Admin::listaOpciones');
$routes->post('/saveOpcion', 'Admin::saveOpcion');
$routes->post('/deleteOpcion', 'Admin::deleteOpcion');
