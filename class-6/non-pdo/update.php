<?php
require "db.php";

$query = "UPDATE posts SET Post='" . substr(md5(microtime()),rand(0,26),20) . "' WHERE ID='4'";
$result = mysql_query($query);

if(!$result) die("Database UPDATE failed. <P> ERROR: " . mysql_error());

$query = "SELECT * FROM posts";
$result = mysql_query($query);

if(!$result) die("Database SELECT failed. <P> ERROR: " . mysql_error());

$rows = mysql_num_rows($result);

for($i = 0; $i < $rows; $i++){
    echo "Post: "  . mysql_result($result, $i, 'Post')  . "<BR>";
    echo "Title: "  . mysql_result($result, $i, 'Title') . "<BR>";
    echo "On: "  . mysql_result($result, $i, 'On') . "<P>";
}


mysql_close($conn);


?>