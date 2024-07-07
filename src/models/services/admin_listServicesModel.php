<?php

/**
 * Get all services
 */
function getServices()
{
  global $db;

  $sql = 'SELECT id, title, description, duration, rates, location, created_at, modified_at FROM services ORDER BY created_at DESC';
  $query = $db->prepare($sql);
  $query->execute();

  return $query->fetchAll();
}