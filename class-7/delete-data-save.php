<?PHP

require("db.php");

$sql = "DELETE FROM users where ID='" . $_POST['ID'] . "'";

$statement = $db->prepare($sql);
$statement->execute();

echo "<a href='update-data.php'>List Data</a>";

?>