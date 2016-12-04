<?php
require_once("src/config/Config.php");

$project_name = "Stocks";
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
		case "6" : $sql = "SELECT c.CompanyName, AVG(Price) From Company c, Stock s WHERE c.IndustryType = 'Software' GROUP BY c.CompanyName;"; break;
		case "7" : $sql = "SELECT c.CompanyName From Company c GROUP BY c.CompanyName HAVING COUNT(EmployeeSize) > 10000;"; break;
		case "8" : $sql = "Select Count(Distinct Price) as Prices From Stock;"; break;
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
		<link rel="stylesheet" type="text/css" href="./src/style/style.css">
		<script>
			function clearTextArea(){
				document.getElementById("adhoc").value = '';
			}
		</script>
	</head>
	<body>
		<h1><?php echo $project_name; ?></h1>
		<p>Team Members: <?php // Print group member names
			foreach($team_members as $key=>$value){
				if($key != 0) echo ", ";
				echo $value;
			} ?>
		</p>
		
		<hr>
		
		<h2>Relations</h2>
		<ol>
			<?php 
				foreach($relations as &$value){ // Print the names of the tables as GET links
					echo "<li><a href=\"./?table=$value&/#Output\">".ucwords($value)."</a></li>";
				}
			?>
		</ol>
		
		<hr>
		
		<h2>Queries</h2>
		<ol>
			<li><a href="./?query=1&/#Output">No. 1</a></li>
			<li><a href="./?query=2&/#Output">No. 2</a></li>
			<li><a href="./?query=3&/#Output">No. 3</a></li>
			<li><a href="./?query=4&/#Output">No. 4</a></li>
			<li><a href="./?query=5&/#Output">No. 5</a></li>
			<li><a href="./?query=6&/#Output">No. 6</a></li>
			<li><a href="./?query=7&/#Output">No. 7</a></li>
			<li><a href="./?query=8&/#Output">No. 8</a></li>
		</ol>
		
		<hr>
		
		<h2>Ad-hoc Query</h2>
		<form id="input" method="POST" action="./#Output" >
			<textarea rows="3" cols="50" name="adhoc" id="adhoc" placeholder="Place your query here"
				><?php if(isset($_POST["adhoc"])) echo $_POST["adhoc"];?></textarea>
			<br>
			<input type="Button" onfocus="clearTextArea();" value="Clear">
			<input type="Submit" name="Submit">
		</form>
		
		<?php // Output
			if($result or $error) {
				?>
				<br>
				<hr>
				
				<h2>
					<span id="Output">Output</span>
				</h2>
				<?php
				if($error){
					echo "Error: ". $error;
				}
				else{ ?>
					<table>
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







