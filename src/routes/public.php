<?php

// Change slug to url
// $router->addMatchTypes(['url' => '[a-z0-9]+(?:-[a-z0-9]+)*']);

// Home
$router->map('GET|POST', '/accueil', 'home', 'home');
$router->map('GET|POST', '/qui-suis-je', 'about_me', 'about_me');
$router->map('GET|POST', '/mes-services', 'services', 'services');
$router->map('GET|POST', '/contact', 'schedules', 'schedules');
$router->map('GET|POST', '/actualites', 'news', 'news');
