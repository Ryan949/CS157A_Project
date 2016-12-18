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


// Query the database based on user input / actions
$result = null;
if(isset($_GET["table"]) && $error == null){
	$result = $mysqli->query("select * from ". $_GET["table"]);
}
else if(isset($_GET["query"]) && $error == null){

	switch($_GET["query"]){
		case "1" : $sql = "SELECT s.Price, s.Symbol FROM Stock as s, Company as c WHERE c.CompanyName = s.CompanyName;"; break;
		case "2" : $sql = "SELECT SUM(PRICE) AS 'Total Price of all Stocks Combined' FROM Stock;"; break;
		case "3" : $sql = "SELECT COUNT(CompanyName) AS 'Number of Company Stock’s Above $10' FROM Stock WHERE Price > 10;"; break;
		case "4" : $sql = "SELECT AVG(PRICE) AS 'Average Price of Stock' FROM Stock;"; break;
		case "5" : $sql = "Select e.Address, e.PhoneNumber, c.CompanyName FROM employee e LEFT OUTER JOIN company c ON (e.CompanyName = c.CompanyName);"; break;
		case "5" : $sql = "Select s.CompanyName FROM Stock WHERE s.Price >= (select max(Price) from Stock);"; break;
		case "6" : $sql = "SELECT DISTINCT c.CompanyName as Software_CompanyName, ROUND((rand() * s.Price * 3), 2) as AVG_Price From Company c, Stock s WHERE c.IndustryType = 'Software' GROUP BY c.CompanyName;"; break;
		case "7" : $sql = "SELECT CompanyName, EmployeeSize From Company WHERE EmployeeSize > 700000 GROUP BY CompanyName;"; break;
		case "8" : $sql = "Select Count(Distinct Price) as Different_Price From Stock;"; break;
		case "9" : $sql = null; break;
		default:   $sql = null;
	}
	if(isset($sql)){
		if(!($result = $mysqli->query($sql))){
			$error = $mysqli->error;
		}
	}
}
else if(!empty($_POST["adhoc"]) && $error == null){
	$adhoc = $_POST["adhoc"];
	$adhoc = str_replace("\n", " ", $adhoc);
	if(strtolower(explode(' ', $adhoc)[0]) !== "select"){
		$error = "Select statements only";
	}
	else if( strpos(trim(trim($adhoc),";"), ";") !== false){
		$error = "Only one statement allowed";
	}
	else{
		$sql = $adhoc;
		if(!($result = $mysqli->query($sql))){
			$error = $mysqli->error;
		}
	}
}

// Render the html page
?>
<!DOCTYPE html>
<html>
	<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="./src/css/style.css">
    <link rel="stylesheet" type="text/css" href="./src/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="./src/css/bootstrap.min.css">
    <script type="text/javascript" src="./src/js/bootstrap.min.js"></script>
    <script>
			function clearTextArea(){
				document.getElementById("adhoc").value = '';
			}
		</script>
	</head>
	<body>
		<h1 class="text-center"><?php echo $project_name; ?></h1>
		<p class="text-center">Team Members: <?php // Print group member names
			foreach($team_members as $key=>$value){
				if($key != 0) echo ", ";
				echo $value;
			} ?>
		</p>

		<hr>

		<h2 class="text-center">Relations</h2>
		<ul class="text-center list-unstyled">
			<?php
				foreach($relations as &$value){ // Print the names of the tables as GET links
					echo "<li><a href=\"./?table=$value&/#Output\">".ucwords($value)."</a></li>";
				}
			?>
		</ul>

		<hr>

		<h2 class="text-center">Queries</h2>
		<ul class="text-center list-unstyled">
			<li><a href="./?query=1&/#Output">Stock Price and Name</a></li>
			<li><a href="./?query=2&/#Output">Total Price of all Stocks Combined</a></li>
			<li><a href="./?query=3&/#Output">Number of Company Stock’s Above $10</a></li>
			<li><a href="./?query=4&/#Output">Average Price of Stock</a></li>
			<li><a href="./?query=5&/#Output">Employee Address and Phone Number with Company they worked with </a></li>
			<li><a href="./?query=6&/#Output">Average Price Software Companies Per Stock </a></li>
			<li><a href="./?query=7&/#Output">Companies with 700,000 or more employees </a></li>
			<li><a href="./?query=8&/#Output">Total number of distinct stock price </a></li>
		</ul>

		<hr>

    <h2 class="text-center"> Extra Functionality </h2>
    <ul class="text-center list-unstyled">
      <li><a href="insert.php"> Insert</a></li>
    </ul>

		<h2 class="text-center">Ad-hoc Query</h2>
		<form id="input" method="POST" action="./#Output" class="text-center" >
			<textarea rows="3" cols="50" name="adhoc" id="adhoc" placeholder="Place your query here"
				><?php if(isset($_POST["adhoc"])) echo $_POST["adhoc"];?></textarea>
			<br>
      <div style="margin-top:1%; padding-bottom:2%">
        <button type="Button" class="btn btn-primary" onfocus="clearTextArea();"> Clear </button>
        <button type="Submit" class="btn btn-success" name="Submit"> Submit </button>
      </div>
		</form>

		<?php // Output
			if($result or $error) {
				?>
				<br>
				<hr>

				<h2 class="text-center">
					<span id="Output">Output</span>
				</h2>
				<?php
				if($error){
					echo "Error: ". $error;
				}
				else{ ?>
					<table class="text-center">
						<?php
							// Render the DB table names to the html table
							echo "<tr>\n";
							while ($info = $result->fetch_field()) {
								echo "<th>$info->name</th>\n";
							}
							echo "</tr>";

							// Render the row data into the html table
							while($row = $result->fetch_array(MYSQLI_NUM)){
								echo "<tr>\n";
								foreach($row as &$value){
									echo "<td>$value</td>\n";
								}
								echo "</tr>\n";
							}
						?>
					</table>
				<?php
				}
			}
		?>
	</body>
</html>
