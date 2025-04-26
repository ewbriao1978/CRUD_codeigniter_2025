<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/inserir_dados', 'Home::inserirDados');
$routes->get('/listar_dados', 'Home::listarDados');
$routes->get('/excluir/(:num)', 'Home::excluir/$1');
$routes->get('/editar/(:any)', 'Home::editar/$1');
$routes->post('/update/(:num)', 'Home::atualizar/$1');