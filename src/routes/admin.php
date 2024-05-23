<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];
dump($admin);

// $router->addMatchTypes(['uuid' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}']);

// Users
$router->map('GET|POST', $admin . '/connexion', 'users/admin_login', 'login');
