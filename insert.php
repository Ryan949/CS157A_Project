<?php
require_once("src/config/Config.php");

$project_name = "Portfolio Stocks Manager";
$team_members = array("Ryan Daily", "William Chan", "Karma Pandya", "Joseph Hu");
$error = null;

// Create connection to Database
$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD);
// Check connection
if ($mysqli->connect_error || ($mysqli->query("use " . DB) !== TRUE)) {
   $error = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


// Get the table names from within the database
$sql = "select table_name from information_schema.tables where table_schema = '".DB."'";
if (!($result = $mysqli->query($sql)) && $error == null) {
	$error = $mysqli->error;
}
$relations = array();
while(($r = mysqli_fetch_assoc($result)) && $error == null){
	$relations[] = $r["table_name"];
}
?>

<!DOCTYPE html>
<html>
	<head>
    <script src="./src/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="./src/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="./src/css/style.css">
    <link rel="stylesheet" type="text/css" href="./src/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="./src/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
			function clearTextArea(){
				document.getElementById("adhoc").value = '';
			}
		</script>
	</head>
	<body>
		<h1 class="text-center"><a href="index.php"><span class="glyphicon glyphicon glyphicon-home homeButton"></span></a></h1>

		<h2 class="text-center" style="margin:2% 0">Select Relation to <u>Insert</u> Values Into: </h2>
    <ol class="listOfTables">
			<?php
        $length = count($relations);
        for ($x = 0; $x < $length; $x++) {
          $name = $relations[$x];
          if ($x == 0) {
            echo "<li class='".$name."'><button type='type' class='btn btn-success tableNames'>".$name."</button></li>";
          }
          elseif ($x % 3 < 3) {
            echo "<li class='".$name."'><button type='type' class='btn btn-success tableNames'>".$name."</button></li>";
          }
          elseif ($x % 3 == 0) {
            echo "<li class='".$name."'><button type='type' class='btn btn-success tableNames'>".$name."</button></li>";
          }
        }
			?>
    </ol>

    <br>
    <h2 class="text-center"> <u>Insert</u> Values Into Table: <span id='tableName'></span></h2>

    <div id="form" class='form-group'></div>


    <div id="report"></div>

    <script type="text/javascript">
      $(".tableNames").click(function() {
        var tableName = $(this).parent("li").attr('class');
        $("#tableName").text(tableName);
        $.ajax({
             url: 'getTable.php', //This is the current doc
             type: "POST",
             dataType:'json', // add json datatype to get json
             data: {'tableName': tableName},
             success: function(data){
               console.log(data)
             },
             error: function(xhr, error){
              $("#form").html(xhr.responseText);
            }
        });
      });

      function insertTable() {
        var tableName = $("#tableName").text();
        var keys = [], values = [];
        $("#form").children("input.tableValue").each(function() {
          var key = $(this).attr("id");
          var value = $(this).val();
          keys.push(key);
          values.push(value);
        });
        $.ajax({
             url: 'InsertIntoTable.php', //This is the current doc
             type: "POST",
             dataType:'json', // add json datatype to get json
             data: {'tableName': tableName, 'keys': keys, 'values': values},
             success: function(data){
                $("#report").html(data);
             },
             error: function(xhr, error){
               console.log(xhr);
              $("#report").html(xhr.responseText);
            }
        });
      }

    </script>
</head>
