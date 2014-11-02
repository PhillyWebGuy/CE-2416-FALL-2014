<?php

require_once "db.php";

$id = 10;
$stmt = $db->query("DELETE FROM posts WHERE ID=?");
$stmt->execute(array($id));

$row_count = $stmt->rowCount();
echo $row_count.' rows selected<P>';

?>