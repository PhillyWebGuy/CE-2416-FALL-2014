<?php

require("db.php");

$sql = "SELECT * FROM users";

$statement = $db->prepare($sql);
$statement->execute();

while($row = $statement->fetch()) {
    echo $row['firstName'] . ", " . $row['lastName'] . ", " . $row['email'] . "<BR>";
}

?>