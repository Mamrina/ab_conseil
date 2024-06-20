<?php

/**
 * Delete a schedule from the database
 */
function deleteSchedule()
{
  try {
    global $db;
    $sql = 'DELETE FROM schedules WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute(['id' => $_GET['id']]);

    alert('L\'horaire a bien été supprimé.', 'success');
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
    }
  }
}

function checkExistSchedules()
{
  try {
    global $db;
    $sql = 'SELECT id FROM schedules WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute(['id' => $_GET['id']]);

    return $query->fetch();
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
    }
  }
}