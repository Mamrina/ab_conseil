<?php
if (!empty($_GET['id']) && !empty(checkExistPosts()->id)) {
  deletePosts();
} else {
  alert('Impossible de supprimer ce service.', 'danger');
}
header('Location: ' . $router->generate('listNews'));
die;
