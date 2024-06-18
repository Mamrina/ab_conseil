<?php

// Change slug to url
// $router->addMatchTypes(['url' => '[a-z0-9]+(?:-[a-z0-9]+)*']);

// Home
$router->map('GET|POST', '/', 'home', 'home');
$router->map('GET|POST', '/a-propos-de-moi', 'about', 'about');
$router->map('GET|POST', '/mes-services', 'services', 'services');