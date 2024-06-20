<?php
function getServices() {
  try {
    global $db;
    $sql = 'SELECT * FROM services';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    exit('Erreur SQL : ' . $e->getMessage());
  }
}