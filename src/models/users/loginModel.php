<?php
/**
 * Verification of a user's access details with email and password
 */
function checkUserAccess()
{
  try {
    global $db;
    $sql = 'SELECT id, pwd FROM users WHERE email = :email';
    $query = $db->prepare($sql);
    $query->execute(['email' => $_POST['email']]);

    $user = $query->fetch();

    if ($user && password_verify($_POST['pwd'], $user->pwd)) {
      return $user;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
    }
  }
}

/**
 * Update last_login user in database
 */
function saveLastLogin(string $userId)
{
  try {
    global $db;
    $sql = 'UPDATE users SET last_login = NOW() WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute(['id' => $userId]);
    alert('Le mot de passe a bien été sauvegardé.', 'success');
} catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
    }
  }
}
