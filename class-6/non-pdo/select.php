<?php

require "db.php";

$query = "SELECT * FROM posts WHERE ID='2'";
$result = mysql_query($query);

if(!$result) die("Database SELECT failed. <P> ERROR: " . mysql_error());

$row = mysql_fetch_row($result);

echo "ID: " . $row[0] . "<BR>";
echo "Post: "  . $row[1]  . "<BR>";
echo "Title: "  . $row[2] . "<BR>";
echo "On: "  . $row[3] . "<P>";

mysql_close($conn);
    
?>