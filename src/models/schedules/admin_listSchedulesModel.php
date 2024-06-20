<?php

/**
 * Get all schedules
 */
function getSchedules()
{
  global $db;

  $sql = 'SELECT id, week_day, morning_opening, morning_close, opening_afternoon, closing_afternoon FROM schedules';
  $query = $db->prepare($sql);
  $query->execute();

  return $query->fetchAll();
}