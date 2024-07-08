<?php

/**
 * Get all services
 */
function getServices()
{
  try {
    global $db;
    $sql = 'SELECT id, title, description, duration, rates, location, created_at, modified_at FROM services ORDER BY created_at DESC';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
    }
  }
}


