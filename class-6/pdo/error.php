<?php

require_once "db.php";

try {
    //connect as appropriate as above
    $db->query('hi'); //invalid query!
} catch(PDOException $ex) {
    echo "An Error occured! ERROR: <P>" . $ex->getMessage();
}

?>