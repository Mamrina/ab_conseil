<?php

// Change slug to url
// $router->addMatchTypes(['url' => '[a-z0-9]+(?:-[a-z0-9]+)*']);

// Home
$router->map('GET|POST', '/', 'home', 'home');