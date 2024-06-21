<?php

// destroySession();

unset($_SESSION['user']);
alert('Déconnexion de votre session réussie !', 'success');
header('Location:' . $router->generate('login'));
die;
