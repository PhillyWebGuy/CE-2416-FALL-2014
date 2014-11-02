<?php
require "db.php";

$query = "DELETE FROM posts WHERE ID='4'";
$result = mysql_query($query);

if(!$result) die("Database UPDATE failed. <P> ERROR: " . mysql_error());

echo mysql_affected_rows();

mysql_close($conn);


?>