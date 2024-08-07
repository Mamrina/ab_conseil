<?php
/**
 * Check if the mail already exists in the database
 */
function checkAlreadyExistEmail(): mixed
{
  global $db;
  if (!empty($_GET['id'])) {
    $email = getUser()->email;
    
    if ($email === $_POST['email']) {
      return false;
    }
  }

  $data = [
    'email' => $_POST['email']
  ];
  $sql = 'SELECT email FROM users WHERE email = :email';
  $query = $db->prepare($sql);
  $query->execute($data);

  return $query->fetch();
}

/**
 * Check a user in the database
 */
function addUser(string $message)
{
  global $db;
  $data = [
    'firstname' => $_POST['firstname'],
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'about_me' => $_POST['about_me'],
    'about_me_2' => $_POST['about_me_2'],
    'email' => $_POST['email'],
    'pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT)
  ];

  try {
    $sql = 'INSERT INTO users (firstname, name, phone, about_me, about_me_2, email, pwd) VALUES (:firstname, :name, :phone, :about_me, :about_me_2, :email, :pwd)';
    $query = $db->prepare($sql);
    $query->execute($data);
    alert($message, 'success');
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.');
    }
  }
}

function updateUser(string $message) // $message = à 'Un utilisateur a bien été modifié ... dans editController
{
  global $db;
  $data = [
    'firstname' => $_POST['firstname'],
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'about_me' => $_POST['about_me'],
    'about_me_2' => $_POST['about_me_2'],
    'email' => $_POST['email'],
    'pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT),
    'id' => $_GET['id']
];

try {
  $sql = 'UPDATE users SET firstname = :firstname, name = :name, phone = :phone, about_me = :about_me, about_me_2 = :about_me_2, email = :email, pwd = :pwd, modified_at = NOW() WHERE id = :id';
  $query = $db->prepare($sql);
  $query->execute($data);
  alert($message, 'success');
} catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.');
    }
  }
}

function getUser()
{
  global $db;

  try {
    $sql = 'SELECT firstname, name, phone, about_me, about_me_2, email FROM users WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute(['id' => $_GET['id']]);

    return $query->fetch();
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
    }
  }
}
