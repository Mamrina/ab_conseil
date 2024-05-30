<?php
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
  $accessUser = checkUserAccess();
  if (!empty($accessUser)) {
    $_SESSION['users'] = [
      'id' => $accessUser->id,
      'last_login' => date('Y-m-d H:i:s')
    ];
    saveLastLogin($accessUser->id);
    alert('Vous êtes connecté.', 'success');
    header('Location: ' . $router->generate('users'));
    die;
  } else {
    alert('Identifiants incorrects.', 'danger');
  }
}

