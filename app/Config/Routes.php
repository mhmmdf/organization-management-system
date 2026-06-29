<?php

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->setAutoRoute(false);

$routes->group('{locale}', static function ($routes) {
    $routes->get('/', 'Pages::index');
    $routes->get('gallery', 'Pages::gallery');
    $routes->get('register', 'Pages::register');
    $routes->get('contact', 'Pages::contact');
});

$routes->get('/', 'Pages::redirectToLocale');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
