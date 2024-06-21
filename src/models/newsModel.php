<?php
function getNews() {
  try {
    global $db;
    $sql = 'SELECT * FROM news';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    exit('Erreur SQL : ' . $e->getMessage());
  }
}