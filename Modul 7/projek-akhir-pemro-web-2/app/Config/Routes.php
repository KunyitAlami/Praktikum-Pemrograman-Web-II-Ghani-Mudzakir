<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::login');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register/save', 'Auth::registerPost');
$routes->post('/login/auth', 'Auth::loginPost');


$routes->get('/logged/beranda', 'Pages::index', ['filter' => 'authcheck']);
$routes->get('/logged/', 'Pages::index', ['filter' => 'authcheck']);
$routes->get('/logged/lihat', 'Buku::index', ['filter' => 'authcheck']);
$routes->get('/logged/tambah', 'Pages::tambah', ['filter' => 'authcheck']);
$routes->get('/logged/ubah', 'Buku::ubah', ['filter' => 'authcheck']);
$routes->get('/logged/hapus', 'Buku::hapus', ['filter' => 'authcheck']);
$routes->post('/logged/Buku/simpan', 'Buku::simpan', ['filter' => 'authcheck']);
$routes->delete('/logged/Buku/delete/(:num)', 'Buku::delete/$1', ['filter' => 'authcheck']);
$routes->get('/logged/edit/(:num)', 'Buku::edit/$1', ['filter' => 'authcheck']);
$routes->post('/logged/Buku/update/(:num)', 'Buku::update/$1', ['filter' => 'authcheck']);
$routes->get('/logout', 'Auth::logout');

