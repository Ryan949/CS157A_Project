<?php
require_once("src/config/Config.php");
$tableName = $_POST['tableName'];
$error = null;
// Create connection to Database
$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD);
// Check connection
if ($mysqli->connect_error || ($mysqli->query("use " . DB) !== TRUE)) {
   $error = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// Get the table columns of a table from within the database
$sql = "select COLUMN_NAME from information_schema.columns where table_schema = '" .DB. "' and table_name = '".$tableName."'";
// echo $sql;
if (!($result = $mysqli->query($sql)) && $error == null) {
	$error = $mysqli->error;
}
// echo $error;
$relations = array();
while(($r = mysqli_fetch_assoc($result)) && $error == null){
	$relations[] = $r["COLUMN_NAME"];
}
foreach($relations as &$value){ // Print the names of the tables as GET links
  echo "<label for='".strtoupper($value)."'>".strtoupper($value)."</label>";
  echo "<input type='".$value."' class='form-control tableValue' id='".strtoupper($value)."'></div>";
}
echo "<button type='submit' onclick='insertTable()' class='btn btn-primary' style='margin:5% auto'>Insert</button></form>";
?>
