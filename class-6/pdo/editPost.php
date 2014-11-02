<?php

require_once "db.php";
require_once "functions.php";

if(isset($_GET['ID'])) {
    $myPost = getPost($db, $_GET['ID']);        
} else {
    echo "ERROR";
}

//print_r($myPost);

?>

<form method="POST" action="updatePost.php">
<table>
<tr>
<td>
    Title
</td>
<td>
    <input size="20" type="input" name="title" value="<?php echo $myPost[0]['Title'];?>">
</td>
</tr>

<tr>
    <td>Content</td>
    <td>
        <textarea name="content" rows="10" cols="40"><?php echo trim($myPost[0]['Post']); ?>
        </textarea>
    </td>
</tr>

<tr>
    <td><input type="hidden" name="ID" value="<?php echo $myPost[0]['ID'];?>"></td>
    <td><input type="submit" name="submit" value="Update"></td>
</tr>
</form>