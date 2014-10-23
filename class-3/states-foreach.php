<?php

//$states = array("Pennsylvania", "New Jersey", "New York", "Delware", "Iowa");

//$states[0] = "Pennsylvania";
//$states[1] =

$select = "<select name='states'>";

$i = 0;
foreach($states as $state) {
    $select = $select . "<option value='" . $i . "'>" . $state . "</option>";
    //or
    //$select .= "<option value='" . $i . "'>" . $state . "</option>";
    $i++;
}
$select .= "</select>";


?>


<form>

State: <?php echo $select; ?>

</form>