<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Solo usuarios logueados pueden entrar a cualquier ruta de este grupo
$routes->group('admin', ['filter' => 'session'], function ($routes) {
    $routes->get('/', 'Home::Admin');
    $routes->get('estudiantes', 'EstudiantesController::index');
});
service('auth')->routes($routes);
