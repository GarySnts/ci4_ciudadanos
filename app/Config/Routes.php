<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('ver_regiones', 'RegionesController::index');



$routes->get('ver_niveles', 'NivelAcademicoController::index');



$routes->get('ver_departamentos', 'DepartamentoController::index');



$routes->get('ver_municipios', 'MunicipioController::index');



$routes->get('ver_ciudadanos', 'CiudadanoController::index');

$routes->get('buscar_ciudadano/(:num)','CiudadanoController::buscarCiudadanos/$1');
$routes->get('eliminar_ciudadano/(:num)','CiudadanoController::eliminarCiudadano/$1');
