<?php
/**
 * Get all users
 */
function getUsers()
{
  global $db;

  $sql = 'SELECT id, firstname, name, about_me, about_me_2, email FROM users';
  $query = $db->prepare($sql);
  $query->execute();

  return $query->fetchAll();
}
