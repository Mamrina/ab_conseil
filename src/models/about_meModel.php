<?php
function getAboutMe($userId) {
  try {
    global $db;
    $sql = 'SELECT email, phone, about_me, about_me_2 FROM users WHERE id = ?';
    $stmt = $db->prepare($sql);
    $stmt->execute([$userId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    exit('Erreur SQL : ' . $e->getMessage());
  }
}
?>
