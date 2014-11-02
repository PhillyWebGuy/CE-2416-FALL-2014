<?php

require_once "db.php";

//METHODOLOGY #1

$random[0] = substr(md5(microtime()),rand(0,26),25);
$random[1] = substr(md5(microtime()),rand(0,26),5);

$stmt = $db->prepare("INSERT INTO posts (Post, Title) VALUES ('" . $random[0] . "','" . $random[1] . "')");
$stmt->execute();
echo "Last Insert ID: " . $db->lastInsertId() . "<P>";
$affected_rows = $stmt->rowCount();

echo $affected_rows . ' were affected<P>';

//METHODOLOGY #2

$stmt = $db->prepare("INSERT INTO posts(Post, Title) VALUES(:post,:title)");
$stmt->execute(array(':post' => $random[0], ':title' => $random[1]));
$affected_rows = $stmt->rowCount();

echo $affected_rows . ' were affected<P>';

//METHODOLOGY #3

$stmt = $db->prepare("INSERT INTO posts(Post, Title) VALUES(?, ?)");
$stmt->execute(array($random[0], $random[1]));
$affected_rows = $stmt->rowCount();

echo $affected_rows . ' were affected<P>';

?>