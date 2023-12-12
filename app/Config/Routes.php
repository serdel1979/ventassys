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

$routes->get('/unidades/restaurar/(:num)', 'Unidades::restaurar/$1');

$routes->get('/categorias', 'Categorias::index');

$routes->get('/categorias/nuevo', 'Categorias::nuevo');

$routes->post('/categorias/insertar', 'Categorias::insertar');

$routes->get('/categorias/edita/(:num)', 'Categorias::edita/$1');

$routes->get('/categorias/eliminar/(:num)', 'Categorias::eliminar/$1');

$routes->get('/categorias/restaurar/(:num)', 'Categorias::restaurar/$1');

$routes->post('/categorias/modificar', 'Categorias::modificar');

$routes->get('/categorias/eliminados', 'Categorias::inactivas');
