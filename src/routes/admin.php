<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];

// Authentification
$router->map('GET|POST', $admin . '/connexion', 'users/login', 'login');
$router->map('GET', $admin . '/deconnexion', 'users/admin_logout', 'logout');
$router->map('GET|POST', $admin . '/mot-de-passe-oublie', 'users/admin_lostPassword', 'lostPassword');

// Users
$router->map('GET', $admin . '/utilisateurs/tableau-de-bord', 'users/admin_dashboard', 'dashboard');
$router->map('GET', $admin . '/utilisateurs', 'users/admin_users', 'users');
$router->map('GET|POST', $admin . '/utilisateurs/editer/[i:id]', 'users/admin_edit', 'editUser');
// $router->map('GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'addUser');
// $router->map('POST', $admin . '/utilisateurs/supprimer/[i:id]', 'users/admin_delete', 'deleteUser');

// Services
$router->map('GET', $admin . '/services', 'services/admin_listServices', 'listServices');
$router->map('GET|POST', $admin . '/services/editer/[i:id]', 'services/admin_editServices', 'editService');
$router->map('GET|POST', $admin . '/services/editer', 'services/admin_editServices', 'addService');
$router->map('GET|POST', $admin . '/services/supprimer/[i:id]', 'services/admin_deleteServices', 'deleteService');

// Schedules
$router->map('GET', $admin . '/horaires-et-contact', 'schedules/admin_listSchedules', 'listSchedules');
$router->map('GET|POST', $admin . '/horaires-et-contact/editer/[i:id]', 'schedules/admin_editSchedules', 'editSchedule');
$router->map('GET|POST', $admin . '/horaires-et-contact/editer', 'schedules/admin_editSchedules', 'addSchedule');
$router->map('GET|POST', $admin . '/horaires-et-contact/supprimer/[i:id]', 'schedules/admin_deleteSchedules', 'deleteSchedule');

// Blog
$router->map('GET', $admin . '/actualites', 'news/admin_listNews', 'listNews');
$router->map('GET|POST', $admin . '/actualites/editer/[i:id]', 'news/admin_editNews', 'editNew');
$router->map('GET|POST', $admin . '/actualites/editer', 'news/admin_editNews', 'addNew');
$router->map('GET|POST', $admin . '/actualites/supprimer/[i:id]', 'news/admin_deleteNews', 'deleteNew');