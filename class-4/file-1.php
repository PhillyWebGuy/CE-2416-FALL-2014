<?php

$lines = file('http://www.yahoo.com');

foreach ($lines as $line_num => $line) {
    //echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    //echo htmlspecialchars($line);
}

//echo strlen("asdfsadf");


?>