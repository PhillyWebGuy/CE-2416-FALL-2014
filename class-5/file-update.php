<?php

//open for appending
$fh = fopen("preamble.txt", "a+");

//write some text
fwrite($fh, "<P>SECTION 1") or die ("Write Failed");

//close
fclose($fh);

//open for reading
$fh = fopen("preamble.txt", "r+");

//read the file
$content = fread($fh, filesize("preamble.txt"));

//show the contents
echo $content;

//close
fclose($fh);


?>