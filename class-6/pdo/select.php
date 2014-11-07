<?php

require_once "db.php";

$id = 2;
$stmt = $db->query("SELECT * FROM posts WHERE ID=?");
$stmt->execute(array($id));
//$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

$row_count = $stmt->rowCount();
echo $row_count.' rows selected<P>';

var_dump($row);

echo "Post: "  . $row[0]['Post']  . "<BR>";
echo "Title: "  . $row[0]['Title'] . "<BR>";
echo "On: "  . $row[0]['On'] . "<P>";





?>