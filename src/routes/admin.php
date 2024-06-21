<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];

// Users
$router->map('GET|POST', $admin . '/connexion', 'users/admin_login', 'login');
$router->map('GET|POST', $admin . '/deconnexion', 'users/admin_logout', 'logout');
$router->map('GET|POST', $admin . '/mot-de-passe-oublie', '', 'lostPassword');
$router->map('GET|POST', $admin . '/utilisateurs/tableau-de-bord', 'users/admin_dashboard', 'dashboard');
$router->map('GET|POST', $admin . '/utilisateurs', 'users/admin_users', 'users');
$router->map('GET|POST', $admin . '/utilisateurs/editer/[i:id]', 'users/admin_edit', 'editUser');
$router->map('GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'addUser');
$router->map('GET|POST', $admin . '/utilisateurs/supprimer/[i:id]', 'users/admin_delete', 'deleteUser');

// Services
$router->map('GET|POST', $admin . '/services', 'services/admin_listServices', 'listServices');
$router->map('GET|POST', $admin . '/services/editer/[i:id]', 'services/admin_editServices', 'editService');
$router->map('GET|POST', $admin . '/services/editer', 'services/admin_editServices', 'addService');
$router->map('GET|POST', $admin . '/services/supprimer/[i:id]', 'services/admin_deleteServices', 'deleteService');

// Schedules and Contact
$router->map('GET|POST', $admin . '/horaires-et-contact', 'schedules/admin_listSchedules', 'listSchedules');
$router->map('GET|POST', $admin . '/horaires-et-contact/editer/[i:id]', 'schedules/admin_editSchedules', 'editSchedule');
$router->map('GET|POST', $admin . '/horaires-et-contact/editer', 'schedules/admin_editSchedules', 'addSchedule');
$router->map('GET|POST', $admin . '/horaires-et-contact/supprimer/[i:id]', 'schedules/admin_deleteSchedules', 'deleteSchedule');
$router->map('GET|POST', $admin . '/formulaire-de-contact', 'contact/admin_listContact', 'listContact');


// Blog
$router->map('GET|POST', $admin . '/actualites', 'news/admin_listNews', 'listNews');
$router->map('GET|POST', $admin . '/actualites/editer/[i:id]', 'news/admin_editNews', 'editNew');
$router->map('GET|POST', $admin . '/actualites/editer', 'news/admin_editNews', 'addNew');
$router->map('GET|POST', $admin . '/actualites/supprimer/[i:id]', 'news/admin_deleteNews', 'deleteNew');