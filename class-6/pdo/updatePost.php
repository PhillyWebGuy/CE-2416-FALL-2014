<?php

require_once "db.php";
require_once "functions.php";

if(isset($_POST['submit'])) {
    
    $post['content'] = $_POST['content'];
    $post['title'] = $_POST['title'];
    $post['ID'] = $_POST['ID'];
    
    try {
        updatePost($db, $post);
        echo "<u>Post Successfully Updated.</u><p>";
        echo $post['title'] . "<P>";
        echo $post['content'];
        echo "<P><a href='listPosts.php'><< Back to List</a>";
    } catch(PDOException $ex) {
        echo $ex->getMessage();
    }
    
} else {
    echo "ERROR";
}



?>