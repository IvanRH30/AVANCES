<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::login');
$routes->get('Salir', 'LoginController::logout');
$routes->get('RegistrarUsuario', 'LoginController::registrarUsuario');
$routes->post('AuntetificaUsuario', 'LoginController::autentificacion');

$routes->get('Inicio', 'Home::index');

$routes->post('Prueba/RegistrarActualizarUsuario','PruebaController::AgregarActualizarUsuario');
$routes->get('Prueba/VerUsuarios','PruebaController::VerUsuarios');
$routes->get('Prueba/GetUsuarios','PruebaController::GetUsuarios');
$routes->get('Prueba/DeshabilitarHabilitarUsuario/(:num)','PruebaController::DeshabilitarHabilitarUsuarioById/$1');
$routes->get('Prueba/GetUsuarioByID/(:num)','PruebaController::GetUsuarioByID/$1');

$routes->get('Modulos/Modulo_1','Modulo1Controller::index');
$routes->get('Modulos/Modulo_2','Modulo2Controller::index');
$routes->get('Modulos/Modulo_3','Modulo3Controller::index');
$routes->get('Modulos/Modulo_4','Modulo4Controller::index');
$routes->get('Modulos/Modulo_5','Modulo5Controller::index');

//rutas de registro de nuevos usuarios
$routes->get('Usuario/Nuevo', 'NuevoUsuarioController::GetFormularioRegistraUsuario');
$routes->post('Usuario/NuevoRegistrarActualizar', 'NuevoUsuarioController::RegistrarActualizarUsuario');
$routes->get('Usuario/VerUsuarios', 'NuevoUsuarioController::VerUsuarios');
$routes->get('Usuario/GetUsuarios', 'NuevoUsuarioController::GetUsuarios');
