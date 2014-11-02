<?php

define('HOST', "ehertzog.phillyphpguy.com");
define('DB', "instruct_blog");
define('USER', "instruct_remote");
define('PASSWORD', "pass098!");

$conn = mysql_connect(HOST, USER, PASSWORD);
if(!$conn) die("Unable to connect to MySQL server. <P> ERROR " . mysql_error());
mysql_select_db(DB) or die("Unable to select database. <P> ERROR: " . mysql_error());

?>