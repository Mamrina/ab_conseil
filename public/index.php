<?php

require '../vendor/autoload.php';

// Constants
define('SRC', '../src/');

// Load environment varables from .env file
$dotenv = Dotenv\Dotenv::createImmutable('../src/config');
$dotenv->load();

session_start();

// Delay login
require SRC . 'config/database.php';
require SRC . 'includes/forms.php';

$router = new AltoRouter();

require SRC . 'routes/admin.php';
require SRC . 'routes/public.php';

$match = $router->match();
// dump($match);

require SRC . 'includes/functions.php';

if (!empty($match['target'])) {
  $_GET = array_merge($_GET, $match['params']);
  $data = [];
  require SRC . 'models/' . $match['target'] . 'Model.php';
  require SRC . 'controllers/' . $match['target'] . 'Controller.php';
  require SRC . 'views/' . $match['target'] . 'View.php';
} else {
  header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
  die;
}
