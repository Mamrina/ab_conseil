<?php
if (!empty($_GET['id']) && !empty(checkExistServices()->id)) {
  deleteService();
} else {
  alert('Impossible de supprimer ce service.', 'danger');
}
header('Location: ' . $router->generate('listServices'));
die;



