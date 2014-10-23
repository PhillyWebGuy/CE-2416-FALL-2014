<?php

/*Re-write the previous code in order to do the following:

1) Instead of string, return an array
2) Instead of printing the returned string, construct a string using concatenation and index references of array items
*/



echo fix_names("EDWARD", "HERTZOG");


function fix_names($firstName, $lastName) {
	//$n1 = ucfirst(strtolower($firstName));
	//$ns2 = ucfirst(strtolower($lastName));
	//or
	$n1 = strtolower($firstName);
	$n1 = ucfirst($n1);
	$n2 = strtolower($lastName);
	$n2 = ucfirst($n2);
	
	
	return $n1 . " "  . $n2;
}

?>
