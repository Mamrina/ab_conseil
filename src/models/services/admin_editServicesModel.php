<?php

/**
 * Check if the service already exists in the database
 */
function checkExistServices(): mixed
{
  global $db;
  $data['title'] = $_POST['title'];
  $sql = 'SELECT title FROM services WHERE title = :title';
  $query = $db->prepare($sql);
  $query->execute($data);

  return $query->fetch();
}

/**
 * Check a service in the database
 */
function addService(): bool
{
  global $db;
  $data = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'duration' => $_POST['duration'],
    'rates' => $_POST['rates'],
    'location' => $_POST['location']
  ];

  try {
    $sql = 'INSERT INTO services (title, description, duration, rates, location) VALUES (:title, :description, :duration, :rates, :location)';
    $query = $db->prepare($sql);
    $query->execute($data);
  } catch (PDOException $e) {
    dump($e->getMessage());
    die;
  }

  return true;
}

function updateService(string $message)
{
  global $db;
  $data = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'duration' => $_POST['duration'],
    'rates' => $_POST['rates'],
    'location' => $_POST['location'],
    'id' => $_GET['id']
  ];

  try {
    $sql = 'UPDATE services SET title = :title, description = :description, duration = :duration, rates = :rates, location = :location WHERE id = :id';
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

function getService()
{
  global $db;

  try {
    $sql = 'SELECT title, description, duration, rates, location FROM services WHERE id = :id';
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
