<?php
function getServices()
{
    global $db;

    $sql = 'SELECT * FROM services ORDER BY created_at DESC';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}