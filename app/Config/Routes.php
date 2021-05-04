<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about-us', 'Home::about_us');
$routes->get('/contact-us', 'Home::contact_us');
$routes->get('/product', 'Home::product_list');
$routes->get('/register', 'Home::register');
$routes->get('/login', 'Home::login');
$routes->get('/furniture-admin/login', 'Login::index');
// $routes->get('/furniture-admin/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');
// $routes->get('/furniture-admin/customer', 'Customer::index');

$routes->group('furniture-admin', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Home::dashboard');
	// $routes->get('logs', 'Logs::logs');
	// route group for logs
<<<<<<< HEAD
	$routes->group('logs', function($routes){
=======
	$routes->group('logs', function ($routes) {
>>>>>>> 938c7ae01c45e2af5c6f034be6b348d21a4eb201
		$routes->get('/', 'Logs::logs');
		$routes->get('detail', 'Logs::detail_logs');
	});
	// route group for product
	// route group for customer
	$routes->group('customer', function ($routes) {
		$routes->get('/', 'Customer::index');
		$routes->get('new', 'Customer::new_customer');
		$routes->get('list', 'Customer::list_customer');
		$routes->get('role', 'Pricing::price_list');
	});
	// route group for product
	$routes->group('product', function ($routes) {
		$routes->get('/', 'Product::index');
		$routes->get('new', 'Product::new_product');
		$routes->get('list', 'Product::list_product');
		$routes->get('category', 'Categories::list_category');
	});
	// route group for order
	$routes->group('order', function ($routes) {
		$routes->get('/', 'Product::index');
		$routes->get('item', 'Product::new_product');
		$routes->get('showroom', 'Product::list_product');
		$routes->get('return', 'Order::list_return_order');
		// $routes->get('category', 'Categories::list_category');
	});
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
