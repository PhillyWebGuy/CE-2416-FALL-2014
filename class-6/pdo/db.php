<?php

define('HOST', $IP);
define('DB', "c9");
define('USER', $C9_User);
define('PASSWORD', "");

$db = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8', USER, PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


if($db){
    echo 'works';
} else {
    echo 'does not work';
}

var_dump($db);

?>