<?php
require_once("src/config/Config.php");
$tableName = $_POST['tableName'];
$keys = $_POST["keys"];
$values = $_POST["values"];

$columns = "(";
foreach($keys as $d){
   $columns = $columns . $d . ",";
}
$columns = rtrim($columns, ",");
$columns = $columns . ")";
// echo $columns;

$newValues = "(";
foreach($values as $e){
   $newValues = $newValues . "'" . $e . "',";
}
$newValues = rtrim($newValues, ",");
$newValues = $newValues . ")";
// echo $newValues;

// Create connection to Database
$error = null;
$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD);
// Check connection
if ($mysqli->connect_error || ($mysqli->query("use " . DB) !== TRUE)) {
   $error = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Get the table columns of a table from within the database
$sql = "INSERT INTO " . $tableName . " " . $columns . " VALUES " . $newValues;

if (!($result = $mysqli->query($sql)) && $error == null) {
	$error = $mysqli->error;
  echo $error;
}

if($result) {
  echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong> Good News! </strong> Successfully inserted data. </div>";
}
else {
  echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong> Bad News! </strong> Error inserting data. </div>";
}

?>
