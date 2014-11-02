<?php
require_once "db.php";

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