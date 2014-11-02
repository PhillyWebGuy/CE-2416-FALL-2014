<?php

$fh = fopen('test-file.txt', 'r') or die ("File Does Not Exist");

$line = fgets($fh);

echo $line;

?>