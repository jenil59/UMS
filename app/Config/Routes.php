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
$routes->get('/aboutus', 'AccessController::about');
$routes->get('/contact', 'AccessController::contact');

$routes->get('logout', 'AccessController::logout');


$routes->match(['get','post'],"/student_login", 'AccessController::student_login',['filter'=>'noauth']);
$routes->match(['get','post'],"/teacher_login", 'AccessController::teacher_login',['filter'=>'noauth']);
$routes->match(['post'],'/register', 'AccessController::register');
$routes->get('/registration', 'AccessController::registration');
// for student controller

$routes->group("student",['filter'=>'auth'],function($routes){
    $routes->get("/", 'Student::dashboard');
    
});


// for teachers

$routes->group("teacher",function($routes){

    $routes->get("/", 'Instructor::dashboard');
    $routes->get("/login", 'Instructor::login');
    $routes->get("/getlogin", 'Instructor::getAccess');

});

// $routes->get("/teacher", 'Instructor::index');
// $routes->get("/teacher/login", 'Instructor::login');
// $routes->get("/teacher/getlogin", 'Instructor::getAccess');
  

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
