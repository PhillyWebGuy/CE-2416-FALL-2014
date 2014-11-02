<?php

if($file = fopen("test-file.txt", 'a+')) {
    echo "FILE CREATED";
} else {
    //noop
}


?>