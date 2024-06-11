<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');


$routes->get('/buku', 'Buku::index');
$routes->get('/buku/(:any)', 'buku::viewBuku/$1');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
	$routes->get('buku', 'NewBuku::index');
	$routes->get('buku/(:segment)/bukuDetail', 'NewBuku::preview/$1');
    $routes->add('buku/new', 'NewBuku::create');
	$routes->add('buku/(:segment)/edit', 'NewBuku::edit/$1');
	$routes->get('buku/(:segment)/delete', 'NewBuku::delete/$1');
});

$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});
$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});


$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});
