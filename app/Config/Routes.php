<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Consulta::index');
$routes->post('consulta/buscaProdutosPorDepartamento', 'Consulta::buscaProdutosPorDepartamento');


