<?php

/**
 * Get all services
 */
function getServices()
{
    global $db;

    $sql = 'SELECT id, title, description, duration, rates, location FROM services';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}