<?php

require_once "db.php";

$stmt = $db->query("SELECT * FROM posts");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$row_count = $stmt->rowCount();
echo $row_count.' rows selected<P>';

for($i = 0; $i < count($results); $i++) {
    echo "Post: "  . $results[$i]['Post']  . "<BR>";
    echo "Title: "  . $results[$i]['Title'] . "<BR>";
    echo "On: "  . $results[$i]['On'] . "<P>";
}


?>