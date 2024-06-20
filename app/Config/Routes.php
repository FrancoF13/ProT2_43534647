<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes.php
$routes->get('principal', 'MiControlador::principal');
$routes->get('quienes_somos', 'MiControlador::quienesSomos');
$routes->get('acerca_de', 'MiControlador::acercaDe');

