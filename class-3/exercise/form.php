<html>
<head></head>
<body>

<?php

//error_reporting(E_ALL); 
//ini_set('display_errors', 1);

//print_r($_POST);
echo "<P>";
print_r($_GET);
//echo "<P>";
//print_r($_REQUEST);


if(isset($_REQUEST['submit'])) {
    echo $_REQUEST['fname'] . " " . $_REQUEST['lname'];  
} else {
    include('form.inc.php');
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";





?>
</body>
</html>