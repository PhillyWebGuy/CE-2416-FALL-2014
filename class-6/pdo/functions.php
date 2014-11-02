<?php

require_once "db.php";


function getAllPosts($db) {
    $stmt = $db->query("SELECT * FROM posts");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}

function getPost($db, $id) {
    $stmt = $db->query("SELECT * FROM posts WHERE ID=?");
    $stmt->execute(array($id));
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function updatePost($db, $post) {
    $stmt = $db->query("UPDATE posts SET Title=?, Post=? WHERE ID=?");
    
    $stmt->execute(array($post['title'], $post['content'], $post['ID']));
    $affected_rows = $stmt->rowCount();
    if($affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function deletePost($db, $id) {
    
}

function createPost($db, $post) {
    
}


?>