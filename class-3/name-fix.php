<?php

$fixed = fix_names("EDWARD", "hertZOg");

echo "<pre>";
print_r($fixed);
echo "</pre>";

echo "<pre>";
var_dump($fixed);
echo "</pre>";

function fix_names($firstName, $lastName) {
    //optional: $n = array();
	$n[0] = ucfirst(strtolower($firstName));
	$n[1] = ucfirst(strtolower($lastName));
	return $n;
}

//this will not work because of variable scope:
//echo "Name: " . $n[0] . " " . $n[1];

//This does work:
echo "Name: " . $fixed[0] . " " . $fixed[1]; 

?>
