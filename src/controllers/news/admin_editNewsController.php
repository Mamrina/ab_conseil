<?php

// Déclaration message d'erreur
$errorsMessagePost = [
  'title' => false,
  'content' => false
];

if (!empty($_POST)) {
  // Rules for news title field
  if (!empty($_POST['title'])) {
    if (checkExistPosts($_POST['title'])) {
      $errorsMessagePost['title'] = 'Cet article existe déjà !';
    }
  } else {
    $errorsMessagePost['title'] = 'Le champ du titre est obligatoire.';
  }

  // Save news in database
  if (!empty($_POST['title']) && !empty($_POST['content'])) {
    if (!array_filter($errorsMessagePost)) {
      if (!empty($_GET['id'])) {
        updatePost('L\'article a bien été modifié.');
      } else {
        addPost('L\'article a bien été ajouté.');
      }
      // Redirect to news list
      alert('L\'article a bien été ajouté.', 'success');
      header('Location: ' . $router->generate('listNews'));
      die;
    } else {
      alert('Cet article existe déjà. Ajout interrompu.', 'danger');
    }
  } else {
    alert('Merci de remplir tous les champs obligatoires.', 'danger');
  }
} else if (!empty($_GET['id'])) {
    $_POST = (array) getPost();
}
