<?php
require "db.php";

$query = "INSERT INTO posts (Post, Title) VALUES ('" . substr(md5(microtime()),rand(0,26),5) . "', '" . substr(md5(microtime()),rand(0,26),5) . "')";
$result = mysql_query($query);

if(!$result) die("Database INSERT failed. <P> ERROR: " . mysql_error());

echo "Last record ID: " . mysql_insert_id();

mysql_close($conn);

?>