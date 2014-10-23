<?php

echo "EXPLODE<P>";

$str = "one,two,three";
$ary = explode(",", $str);

echo "<pre>";
print_r($ary);
echo "</pre>";




echo "<P>IMPLODE";

$ary = ['fname'=>'Ed', 'lname'=>'Hertzog'];
$str = implode($ary, ",");

echo "<pre>";
echo $str;
echo "</pre>";


?>