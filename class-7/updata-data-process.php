<?php

require("db.php");

$sql = "SELECT * FROM users WHERE ID='" . $_GET['id'] . "'";

$statement = $db->prepare($sql);
$statement->execute();

while($row = $statement->fetch()) {
?>

    <form action="update-data-save.php" method="POST">

    <label>First Name</label>
    <input type="text" value="<?php echo $row['firstName']; ?>" name="firstName" id="firstName">
    <br>
    <label>Last Name</label>
    <input type="text" value="<?php echo $row['lastName']; ?>" name="lastName" id="lastName">
    <br>
    <label>Email</label>
    <input type="text" value="<?php echo $row['email']; ?>" name="email" id="email">
    <br>
    <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
    <input type="submit" name="submit" value="Save">
    <br>

</form>    
<?php
    }
?>