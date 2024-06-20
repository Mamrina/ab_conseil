<?php
if (!empty($_GET['id']) && !empty(checkExistSchedules()->id)) {
  deleteSchedule();
} else {
  alert('Impossible de supprimer cet horaire.', 'danger');
}
header('Location: ' . $router->generate('listSchedules'));
die;