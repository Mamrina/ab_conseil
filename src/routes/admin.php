<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];
// dump($admin);

$router->addMatchTypes(['uuid' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}']);

// Users
$router->map('GET|POST', $admin . '/connexion', 'users/admin_login', 'login');
$router->map('GET|POST', $admin . '/deconnexion', 'users/admin_logout', 'logout');
$router->map('GET|POST', $admin . '/mot-de-passe-oublie', '', 'lostPassword');
$router->map('GET|POST', $admin . '/utilisateurs/tableau-de-bord', 'users/admin_dashboard', 'dashboard');
$router->map('GET|POST', $admin . '/utilisateurs', 'users/admin_users', 'users');
$router->map('GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'editUser');
$router->map('GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'addUser');
$router->map('GET|POST', $admin . '/utilisateurs/supprimer', 'users/admin_delete', 'deleteUser');

// Services
$router->map('GET|POST', $admin . '/services', 'services/admin_listServices', 'listServices');
$router->map('GET|POST', $admin . '/services/editer/[i:id]', 'services/admin_editServices', 'editService');
$router->map('GET|POST', $admin . '/services/editer', 'services/admin_editServices', 'addService');
$router->map('GET|POST', $admin . '/services/supprimer/[i:id]', 'services/admin_deleteServices', 'deleteService');

// Blog
$router->map('GET|POST', $admin . '/actualites', 'news/admin_listNews', 'listNews');
$router->map('GET|POST', $admin . '/actualites/editer/[i:id]', 'news/admin_editNews', 'editNew');
$router->map('GET|POST', $admin . '/actualites/editer', 'news/admin_editNews', 'addNew');
$router->map('GET|POST', $admin . '/actualites/supprimer/[i:id]', 'news/admin_deleteNews', 'deleteNew');