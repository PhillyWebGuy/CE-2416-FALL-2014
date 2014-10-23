<?php

$states = array("Pennsylvania", "New Jersey", "New York", "Delware", "Iowa");

$select = "<select name='states'>";

for($i = 0; $i < count($states); $i++) {
    $select .= "<option value='" . $i . "'>" . $states[$i] . "</option>\n";
}
$select .= "</select>";


?>


<form>

State: <?php echo $select; ?>

</form>