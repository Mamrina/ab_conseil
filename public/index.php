<?php

require '../vendor/autoload.php';

// Constants
define('SRC', '../src/');

// Load environment varables from .env file
$dotenv = Dotenv\Dotenv::createImmutable('../src/config');
$dotenv->load();

// Delay login
require SRC . 'config/database.php';
require SRC . 'includes/forms.php';

$router = new AltoRouter();

require SRC . 'routes/public.php';
require SRC . 'routes/admin.php';

$match = $router->match();

require SRC . 'includes/functions.php';
// LogoutTimer();

if (!empty($match['target'])) {
    // checkAdmin($match, $router);
    $_GET = array_merge($_GET, $match['params']);
    $data = []; // Data to be sent to the view
    require SRC . 'models/' . $match['target'] . 'Model.php';
    require SRC . 'controllers/' . $match['target'] . 'Controller.php';
    require SRC . 'views/' . $match['target'] . 'View.php';
} else {
    // Display error page
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    die;
}