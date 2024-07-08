<?php

// Home
$router->map('GET', '/accueil', 'home', 'home');

// Pages
$router->map('GET', '/qui-suis-je', 'about_me', 'about_me');
$router->map('GET', '/mes-services', 'services', 'services');
$router->map('GET|POST', '/contact', 'schedules', 'schedules');
$router->map('GET', '/actualites', 'news', 'news');
$router->map('GET', '/mentions-legales', 'legalNotice', 'legalNotice');