<?php

require("db.php");

$sql = "SELECT * FROM users";

$statement = $db->prepare($sql);
$statement->execute();

while($row = $statement->fetch()) {
    echo "<a href='update-data-process.php?id=" . $row['ID'] . "'>[" .
    $row['ID'] . "]</a> " . $row['firstName'] . ", 
    " . $row['lastName'] . ", " . $row['email'] . 
    "<a href='delete-data-process.php?id=" . $row['ID'] . "'>[x]</a><BR>";
}

?>