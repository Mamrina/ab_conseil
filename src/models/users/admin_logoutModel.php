<?php

// destroySession();

unset($_SESSION['users']);
alert('Déconnexion de votre session réussie !', 'success');
header('Location: ' . $router->generate('login'));
die;
