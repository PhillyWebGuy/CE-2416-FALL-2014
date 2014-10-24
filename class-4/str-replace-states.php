<?php

$states = ["Pennsylvania", "New Jersey", "New York"];

for($i = 0; $i < count($states); $i++) {
    $states[$i]  = str_replace("e", "x", $states[$i]);
}

echo "<pre>";
print_r($states);
echo "</pre>";



$i = 0;
foreach($states as $state) {
    $newAry[$i] = str_replace("e", "x", $state);
    $i++;
}

echo "<pre>";
print_r($newAry);
echo "</pre>";







?>