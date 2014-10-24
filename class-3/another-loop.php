<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//Create array.
$months=array(
'January'=>31,
'February'=>'28 days, if leap year 29',
'March'=>31,
'April'=>30,
'May'=>31,
'June'=>30,
'July'=>31,
'August'=>31,
'September'=>30,
'October'=>31,
'November'=>30,
'December'=>31
);
//Define function. Use built in string function to make each option upper case.
function option($month, $days){
    echo "<option value='" . $days . "'>" . ucfirst($month) . "</option>\n";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Days in a Month</title>
</head>
<body>
<h2>Days in a Month</h2>
<?php
//If form not submitted, show form.
if(!isset ($_POST['submit'])){
?>
<form method="post" action="months.php">
<p>Please choose a month.</p>
<select name="month">
<?php
//Create options using the array and the function.
foreach ($months as $k => $v){
    option($k);
}
?>
</select>
<p />
<input type="submit" name="submit" value="Go" />
</form>
<?php
//If form submitted, respond to user.
} else {
//Retrieve user input.
$month = $_POST['month'];
//Allow for February using a conditional statement.
if ($month == 'February'){
echo "The month of February has " . $months['February'] . ".";
}else{
echo "The month of $month has $months[$month] days.";
}
}
?>
</body>
</html>