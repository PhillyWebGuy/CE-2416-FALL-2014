<?php

require("db.php");

///print_r($_POST);

    $form['firstName'] = $_POST['firstName'];
    $form['lastName'] = $_POST['lastName'];
    $form['email'] = $_POST['email'];
    
    $sql = "UPDATE users SET firstName = '" . $form['firstName'] . "',
    lastName = '" . $form['lastName'] . "',
    email = '" . $form['email'] . "' WHERE ID='" . $_POST['ID'] . "'";
    
    //echo $sql . "<BR>";
    
    $statement = $db->prepare($sql);
    $statement->execute();

    echo "<a href='update-data.php'>List Data</a>";


?>