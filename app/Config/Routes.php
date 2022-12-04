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
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/intro', 'IntroExample::index');

// ĐƯỜNG DẪN URL CHO FRONT-END
$routes->get('/home/lang/(:any)', [\App\Controllers\FRONT_END\Home::class, 'index'], ['as' => 'home']);
$routes->get('/home/lang/vie', [\App\Controllers\FRONT_END\Home::class, 'index'], ['as' => 'home.vie']);
$routes->addRedirect('/', 'home.vie');

// Chuyển đổi ngôn ngữ
$routes->get('language', [\App\Controllers\FRONT_END\Home::class, 'default_language'], ['as' => 'language']);

// ---------------------------------------
// ĐƯỜNG DẪN URL CHO BACK-END
$routes->get('/admin/dashboard', [\App\Controllers\BACK_END\HomeAdmin::class, 'index'], ['as' => 'admin_dashboard']);
$routes->addRedirect('/admin', 'admin_dashboard');

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
