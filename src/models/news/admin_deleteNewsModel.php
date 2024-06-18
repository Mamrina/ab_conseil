<?php

/**
 * Delete a service from the database
 */
function deletePosts()
{
    try {
        global $db;
        $sql = 'DELETE FROM news WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $_GET['id']]);

        alert('L\'article a bien été supprimé.', 'success');
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
        }
    }
}

function checkExistPosts()
{
    try {
        global $db;
        $sql = 'SELECT id FROM news WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $_GET['id']]);

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
