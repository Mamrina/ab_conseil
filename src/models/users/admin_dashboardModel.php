<?php
// récupération du firstname de l'utilisateur
function showUserFirstname()
{
    try {
        global $db;
        $sql = 'SELECT firstname FROM users WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $_SESSION['user']['id']]);

        return $query->fetch();
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
        }
    }
}