<?php

define('HOST', 'mysql3.000webhost.com');
define('DB', "a4890077_user");
define('USER', "a4890077_user");
define('PASSWORD', "buddha123");

/*$mysql_host = "mysql3.000webhost.com";
$mysql_database = "a4890077_user";
$mysql_user = "a4890077_user";
$mysql_password = "buddha123";*/

$db = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8', USER, PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


/*if($db){
    echo 'works';
} else {
    echo 'does not work';
}

var_dump($db);
*/
?>