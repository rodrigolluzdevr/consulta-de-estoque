<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Welcome::index');
$routes->post('welcome/buscaProdutosPorDepartamento', 'Welcome::buscaProdutosPorDepartamento');


