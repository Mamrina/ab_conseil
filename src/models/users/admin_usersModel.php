<?php
/**
 * Get all users
 */
function getUsers()
{
  global $db;

  $sql = 'SELECT id, firstname, name, about_me, email FROM users';
  $query = $db->prepare($sql);
  $query->execute();

  return $query->fetchAll();
}
