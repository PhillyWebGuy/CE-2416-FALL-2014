<?php

require_once "db.php";
require_once "functions.php";

$myPosts = getAllPosts($db);

?>

<table border=1>
<tr>
<td></td>
<td>Title</td>
<td>Timestamp</td>
</tr>

<?php
    for($i = 0; $i < count($myPosts); $i++) {
        echo "<tr><td><a href='editPost.php?ID="  . $myPosts[$i]['ID']  . "'>Edit</a></td>";
        echo "<td>"  . $myPosts[$i]['Title'] . "</td>";
        echo "<td>"  . $myPosts[$i]['On'] . "</td></tr>";
    }
?>


</table>