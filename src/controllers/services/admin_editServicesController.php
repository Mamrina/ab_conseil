<?php

// Errors messages declaration
$errorsMessageService = [
  'title' => false,
  'description' => false,
  'duration' => false,
  'rates' => false,
  'location' => false
];

if (!empty($_POST)) {
  if (!empty($_POST['title'])) {
    if (checkExistServices($_POST['title'])) {
      $errorsMessageService['title'] = 'Ce service existe déjà !';
    }
  } else {
    $errorsMessageService['title'] = 'Le champ du titre est obligatoire.';
  }

  // Save services in database
  if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['duration']) && !empty($_POST['rates']) && !empty($_POST['location'])) {
    if (!array_filter($errorsMessageService)) {
      if (!empty($_GET['id'])) {
        updateService('Le service a bien été modifié.');
      } else {
        addService('Le service a bien été ajouté.');
      }
      // Redirect to services list
      alert('Le service a bien été ajouté.', 'success');
      header('Location: ' . $router->generate('dashboard'));
    } else {
      alert('Ce service existe déjà. Ajout interrompu.', 'danger');
    }
  } else {
    alert('Merci de remplir tous les champs obligatoires.', 'danger');
  }
} else if (!empty($_GET['id'])) {
  $_POST = (array) getService();
}
