<?php

require("db.php");

if(isset($_POST['submit'])) {
    $form['firstName'] = $_POST['firstName'];
    $form['lastName'] = $_POST['lastName'];
    $form['email'] = $_POST['email'];
    
   $sql = "INSERT INTO users (firstName, lastName, email) 
   VALUES (' " . $form['firstName'] . " ',' " . $form['lastName'] . " ', ' " . $form['email'] . " ')";
    
    echo $sql . "<BR>";
    
    $statement = $db->prepare($sql);
    $statement->execute();
    echo $db->lastInsertId();
    echo "<P>";
}

?>

<form action="sample-form.php" method="POST">

<label>First Name</label>
<input type="text" name="firstName" id="firstName">
<br>
<label>Last Name</label>
<input type="text" name="lastName" id="lastName">
<br>
<label>Email</label>
<input type="text" name="email" id="email">
<br>
<input type="submit" name="submit" value="Submit">
<br>

</form>