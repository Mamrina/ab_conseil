<?php
/**
 * Get all news
 */
function getNews()
{
  global $db;

  $sql = 'SELECT id, title, content, created_at, modified_at FROM news';
  $query = $db->prepare($sql);
  $query->execute();

  return $query->fetchAll();
}