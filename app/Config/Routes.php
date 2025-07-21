<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('how', 'How::index');
$routes->get('team', 'Team::index');
$routes->get('social', 'Social::index');
$routes->get('faqs', 'Faqs::index');

