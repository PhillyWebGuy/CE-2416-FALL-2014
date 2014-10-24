<?php

$myArray = array("New Jersey", "New York", "Pennsylvania");

$myStr = "<UL>";

for($i = 0; $i < count($myArray); $i++){
    $myArray[$i] = str_replace("e", "x", $myArray[$i]);   
    $myStr .= "<li>" . $myArray[$i];
}

$myStr .= "</ul>";

echo $myStr;

?>