<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Home', 'MainPage::index');

$routes->get('/login','Login::login');

$routes->post('/login/auth','Login::auth');

$routes->get('/register','Register::index'); 

$routes->post('/register/saveData','Register::saveData');

$routes->get('/page_user','Workers::index');

$routes->get('/logout', 'MainPage::logout');

$routes->get('/dashboard','Dashboard::index');

$routes->get('/dashboard','Dashboard::add_worker');

$routes->get('/user_dashboard','User_db::index');

$routes->get('user_dashboard/edit/(:num)', 'User_db::edit/$1');

$routes->post('user_dashboard/update/(:num)', 'User_db::update/$1');

$routes->get('user_dashboard/delete/(:num)', 'User_db::delete/$1');

$routes->get('workers_dashboard', 'Workers_db::index');

$routes->get('workers_dashboard/edit/(:num)', 'Workers_db::edit/$1');

$routes->post('workers_dashboard/update/(:num)', 'Workers_db::update/$1');

$routes->get('workers_dashboard/delete/(:num)', 'Workers_db::delete/$1');

$routes->post('workers_dashboard/create', 'Workers_db::create');

$routes->get('add_worker', 'Workers_db::add');

