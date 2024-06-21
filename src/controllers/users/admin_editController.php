<?php
/**
 * Check format email
 * @param string $email
 * @return bool
 */
function checkEmail (string $email): bool
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$errorsMessage = [
  'firstname' => false,
  'name' => false,
  'phone' => false,
  'about_me' => false,
  'about_me_2' => false,
  'email' => false,
  'pwd' => false,
  'pwdConfirm' => false
];

if (!empty($_POST)) {
  // Rules for email field
  if (!empty($_POST['email'])) {
    if (!checkEmail($_POST['email'])) {
      $errorsMessage['email'] = 'L\'adresse email n\'est pas valide !';
    } else if (!empty(checkAlreadyExistEmail())) {
      $errorsMessage['email'] = 'L\'adresse email existe déjà !';
    }
  }

  if (!empty($_POST['pwd'])) {
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{12,}$/';
    if (!preg_match($regex, $_POST['pwd'])) {
      $errorsMessage['pwd'] = 'Merci de respecter le format indiqué.';
    } else if ($_POST['pwd'] !== $_POST['pwdConfirm']) {
      $errorsMessage['pwdConfirm'] = 'Les mots de passe ne sont pas indentiques.';
    }
  }

  // Save user in database
  if (!empty($_POST['firstname']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['about_me']) && !empty($_POST['about_me_2']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['pwdConfirm'])) {
    if (!$errorsMessage['firstname'] && !$errorsMessage['name'] && !$errorsMessage['phone'] && !$errorsMessage['about_me'] && !$errorsMessage['about_me_2'] && !$errorsMessage['email'] && !$errorsMessage['pwd'] && !$errorsMessage['pwdConfirm']) {
      if (!empty($_GET['id'])) {
        updateUser('Vos modifications ont bien étés prises en compte.', 'success');
      } 
      // else {
      //   addUser('Un utilisateur a bien été ajouté.');
      // }
      header('Location: ' . $router->generate('users'));
      die;
    } else {
      alert('Erreur lors de l\'ajout de l\'utilisateur.');
    }
  } else {
    alert('Merci de remplir tous les champs obligatoires.');
  }
} else if (!empty($_GET['id'])) { // L'adresse email reste dans le champs
  $_POST = (array) getUser();
}
