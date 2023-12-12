<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/unidades', 'Unidades::index');

$routes->get('/unidades/eliminados', 'Unidades::inactivas');

$routes->get('/unidades/nuevo', 'Unidades::nuevo');

$routes->post('/unidades/insertar', 'Unidades::insertar');

$routes->get('/unidades/edita/(:num)', 'Unidades::edita/$1');

$routes->post('/unidades/modificar', 'Unidades::modificar');

$routes->get('/unidades/eliminar/(:num)', 'Unidades::eliminar/$1');
