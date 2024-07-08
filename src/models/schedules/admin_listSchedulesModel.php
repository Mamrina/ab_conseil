<?php

/**
 * Get all schedules
 */
function getSchedules()
{
  try {
    global $db;
  $sql = 'SELECT id, week_day, morning_opening, morning_close, opening_afternoon, closing_afternoon FROM schedules';
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