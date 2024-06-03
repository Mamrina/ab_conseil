<?php

/**
 * Check if the news already exists in the database
 */
function checkExistPosts(): mixed
{
    global $db;
    $data['title'] = $_POST['title'];
    $sql = 'SELECT title FROM news WHERE title = :title';
    $query = $db->prepare($sql);
    $query->execute($data);

    return $query->fetch();
}

/**
 * Check a news in the database
 */
function addPost(): bool
{
    global $db;
    $data = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'created_at' => $_POST['created_at'],
        'modified_at' => $_POST['modified_at']
    ];
    try {
        $sql = 'INSERT INTO news (title, content, created_at, modified_at) VALUES (:title, :content, :created_at, :modified_at)';
        $query = $db->prepare($sql);
        $query->execute($data);
    } catch (PDOException $e) {
        dump($e->getMessage());
        die;
    }
    return true;
}

function updatePost(string $message)
{
    global $db;
    $data = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'created_at' => $_POST['created_at'],
        'modified_at' => $_POST['modified_at'],
        'id' => $_GET['id']
    ];
    try {
        $sql = 'UPDATE news SET title = :title, content = :content, created_at = :created_at, modified_at = :modified_at WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute($data);
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.');
        }
    }
}

function getPost()
{
    global $db;

    try {
        $sql = 'SELECT title, content, created_at, modified_at FROM news WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $_GET['id']]);

        return $query->fetch();
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.' . 'danger');
        }
    }
}
