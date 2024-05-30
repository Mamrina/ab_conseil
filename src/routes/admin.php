<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];
// dump($admin);

$router->addMatchTypes(['uuid' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}']);

// Users
$router->map('GET|POST', $admin . '/connexion', 'users/admin_login', 'login');
$router->map('GET|POST', $admin . '/mot-de-passe-oublie', '', 'lostPassword');
$router->map('GET|POST', $admin . '/utilisateurs', 'users/admin_listUsers', 'users');
$router->map('GET|POST', $admin . '/utilisateur', 'users/admin_users', 'users');
$router->map('GET|POST', $admin . '/utilisateur/editer', 'users/admin_edit', 'editUser');
// $router->map('GET|POST', $admin . '/utilisateur/editer', 'users/admin_edit', 'addUser');
$router->map('GET|POST', $admin . '/utilisateur/supprimer', 'users/admin_delete', 'deleteUser');
