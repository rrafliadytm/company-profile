<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'home::index');
$routes->get('How', 'How::index');
$routes->get('Team', 'Team::index');
$routes->get('Social', 'Social::index');
$routes->get('Faqs', 'Faqs::index');

