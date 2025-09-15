<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// $routes->get('/', 'Forms::index');
// $routes->post('forms/index', 'Forms::index'); 
$routes->match(['get','post'] , '/', 'Forms::index');


$routes->get('/forms_signup', 'Forms::signup');
$routes->get('/welcome_dashboard', 'Forms::dashboard');

