<?php

// Déclaration message d'erreur
$errorsMessageService = [
  'week_day' => false,
  'morning_opening' => false,
  'morning_close' => false,
  'opening_afternoon' => false,
  'closing_afternoon' => false
];

if (!empty($_POST)) {
  if (!empty($_POST['week_day'])) {
    if (checkExistSchedules($_POST['week_day'])) {
      $errorsMessageService['week_day'] = 'Cet horaire existe déjà !';
    }
  } else {
    $errorsMessageService['week_day'] = 'Le champ du titre est obligatoire.';
  }

  // Save services in database
  if (!empty($_POST['week_day']) && !empty($_POST['morning_opening']) && !empty($_POST['morning_close']) && !empty($_POST['opening_afternoon']) && !empty($_POST['closing_afternoon'])) {
    if (!array_filter($errorsMessageService)) {
      if (!empty($_GET['id'])) {
        updateSchedule('L\'horaire a bien été modifié.');
      } else {
        addSchedule('L\'horaire a bien été ajouté.');
      }
      // Redirect to services list
      header('Location: ' . $router->generate('listSchedules'));
      alert('L\'horaire a bien été ajouté.', 'success');
    } else {
      alert('Cet horaire existe déjà. Ajout interrompu.', 'danger');
    }
  } else {
    alert('Merci de remplir tous les champs obligatoires.', 'danger');
  }
} else if (!empty($_GET['id'])) {
  $_POST = (array) getSchedule();
}
