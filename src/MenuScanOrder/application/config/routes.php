<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //index
$routes->get('/home', 'HomeController::index');
$routes->get('/items', 'ItemsController::index');
$routes->get('/menuman', 'MenumanController::index');
$routes->get('/staffman', 'StaffmanController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/signup', 'SignupController::index');
$routes->get('/logout', 'LogoutController::index');
$routes->get('/adminlogin', 'AdminloginController::index');
$routes->get('/vieworder', 'VieworderController::index');
$routes->get('/orderman', 'OrdermanController::index');

//add function
$routes->post('/add_item/confirm', 'MenumanController::add_item');
$routes->post('/add_user/confirm', 'StaffmanController::add_user');
$routes->post('/add_order/confirm', 'OrdermanController::add_order');

//delete function
$routes->get('/delete_item/(:num)', 'MenumanController::delete_item/$1');
$routes->get('/delete_user/(:num)', 'StaffmanController::delete_user/$1');
$routes->get('/delete_order/(:num)', 'OrdermanController::delete_order/$1');

//edit function
$routes->post('/edit_item/confirm/(:num)', 'MenumanController::edit_item/$1');
$routes->post('/edit_user/confirm/(:num)', 'StaffmanController::edit_user/$1');
$routes->post('/edit_order/confirm/(:num)', 'OrdermanController::edit_order/$1');

//signup function
$routes->post('/signup/confirm', 'SignupController::signup');

// login function
$routes->post('/login/confirm', 'LoginController::login');
$routes->post('/adminlogin/confirm', 'AdminloginController::login');
