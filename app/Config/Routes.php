<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Auth::logout');
$routes->get('/register', 'Auth::register');
$routes->post('/register/process', 'Auth::register');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/formbiodata', 'Biodata::create');
$routes->get('/formbiodata2', 'Biodata2::create2');
$routes->get('/formbiodata3', 'Biodata3::create3');
$routes->post('/biodata/store', 'Biodata::store');
$routes->post('/biodata/store2', 'Biodata2::store2');
$routes->post('/biodata/store3', 'Biodata3::store3');
$routes->get('/biodata/export', 'Biodata::export');
$routes->get('/biodata/delete/(:num)', 'Biodata::delete/$1');
$routes->get('/biodata2/delete/(:num)', 'Biodata2::delete/$1');
$routes->get('/biodata3/delete/(:num)', 'Biodata3::delete/$1');
$routes->get('/invoice_biodata', 'Biodata::form_after_biodata');
$routes->get('/kegiatan1', 'Home::kegiatan1');
$routes->get('/kegiatan2', 'Home::kegiatan2');
$routes->get('/kegiatan3', 'Home::kegiatan3');
$routes->get('/dashboard', 'Biodata::dashboard');
$routes->get('/v_keg1', 'Biodata::index');
$routes->get('/v_keg2', 'Biodata2::index');
$routes->get('/v_keg3', 'Biodata3::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}