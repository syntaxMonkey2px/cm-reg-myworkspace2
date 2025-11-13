<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes

*/
// Load system routes first, then environment routes if any

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
 

// --------------------------------------------------------------------
// Router Setup
// --------------------------------------------------------------------
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); // enable legacy auto routing (tutorial-style)

// --------------------------------------------------------------------
// Route Definitions
// --------------------------------------------------------------------
$routes->get('/', 'Home::index');


// --------------------------------------------------------------------
// Additional Routing
// --------------------------------------------------------------------


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

