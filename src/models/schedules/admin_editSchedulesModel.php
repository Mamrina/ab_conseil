<?php

/**
 * Check if the service already exists in the database
 */
function checkExistSchedules(): mixed
{
  global $db;
  $data['week_day'] = $_POST['week_day'];
  $sql = 'SELECT week_day FROM schedules WHERE week_day = :week_day';
  $query = $db->prepare($sql);
  $query->execute($data);

  return $query->fetch();
}

/**
 * Add schedule in the database
 */
function addSchedule(): bool
{
  global $db;
  $data = [
    'week_day' => $_POST['week_day'],
    'morning_opening' => $_POST['morning_opening'],
    'morning_close' => $_POST['morning_close'],
    'opening_afternoon' => $_POST['opening_afternoon'],
    'closing_afternoon' => $_POST['closing_afternoon']
  ];

  try {
    $sql = 'INSERT INTO schedules (week_day, morning_opening, morning_close, opening_afternoon, closing_afternoon) VALUES (:week_day, :morning_opening, :morning_close, :opening_afternoon, :closing_afternoon)';
    $query = $db->prepare($sql);
    $query->execute($data);
  } catch (PDOException $e) {
    dump($e->getMessage());
    die;
  }

  return true;
}

function updateSchedule(string $message)
{
  global $db;
  $data = [
    'week_day' => $_POST['week_day'],
    'morning_opening' => $_POST['morning_opening'],
    'morning_close' => $_POST['morning_close'],
    'opening_afternoon' => $_POST['opening_afternoon'],
    'closing_afternoon' => $_POST['closing_afternoon'],
    'id' => $_GET['id']
  ];

  try {
    $sql = 'UPDATE schedules SET week_day = :week_day, morning_opening = :morning_opening, morning_close = :morning_close, opening_afternoon = :opening_afternoon, closing_afternoon = :closing_afternoon WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute($data);
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.');
    }
  }
}

function getSchedule()
{
  global $db;

  try {
    $sql = 'SELECT week_day, morning_opening, morning_close, opening_afternoon, closing_afternoon FROM schedules WHERE id = :id';
    $query = $db->prepare($sql);
    $query->execute(['id' => $_GET['id']]);

    return $query->fetch();
  } catch (PDOException $e) {
    if ($_ENV['DEBUG'] == 'true') {
      dump($e->getMessage());
      die;
    } else {
      alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
    }
  }
}
