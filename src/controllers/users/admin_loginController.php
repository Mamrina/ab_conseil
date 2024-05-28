<?php

if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
    $accessUser = checkUserAccess();
    if (!empty($accessUser)) {
        $_SESSION['user'] = [
            'id' => $accessUser->id,
            'last_login' => date('Y-m-d H:i:s')
        ];

        saveLastLogin($accessUser->id);

        // Création d'une session, utilisation de l'uuid
        alert('Vous êtes connecté.', 'success');
        header('Location: ' . $router->generate('users'));
        die;
    } else {
        alert('Identifiants incorrects.', 'danger');
    }
}

