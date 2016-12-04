<?php
//require_once("...");

$project_name = "Project Name";
$team_members = array("Team-member name", "Team-member name");

$relations = array("Table1", "Table2", "Table3");

/*generate output*/ 
// the end result will probably be a 2D array that will map into a html table
$output = /*generated output from queries*/ "Shit be great, man."; 

?>
<!DOCTYPE html>
<html>
	<head>
		<script>
			function clearTextArea(){
				document.getElementById("adhoc").value = '';
			}
		</script>
	</head>
	<body>
		<h1><?php echo $project_name; ?></h1>
		<p>Team Members: <?php 
			foreach($team_members as $key=>$value){
				if($key != 0) echo ", ";
				echo $value;
			} ?>
		</p>
		
		<hr>
		
		<h2>Relations</h2>
		<ol>
			<?php 
				foreach($relations as &$value){
					echo "<li><a href=\"./?table=$value\">$value</a></li>";
				}			
			?>
		</ol>
		
		<hr>
		
		<h2>Queries</h2>
		<ol>
			<li><a href="./?query=1">Something Descriptive</a></li>
			<li><a href="./?query=2">This does a thing</a></li>
			<li><a href="./?query=3">This is someting else</a></li>
			<li><a href="./?query=4">Not related to #2 at all</a></li>
			<li><a href="./?query=5">Nuke_the_database.exe</a></li>
		</ol>
		
		<hr>
		
		<h2>Ad-hoc Query</h2>
		<form id="input" method="POST">
			<textarea rows="3" cols="50" name="adhoc" id="adhoc" placeholder="Place your query here"></textarea>
			<br>
			<input type="Button" onfocus="clearTextArea();" value="Clear">
			<input type="Submit" name="Submit">
		</form>
		
		<?php 
			if(!empty($_POST["adhoc"]) |
			   isset($_GET["query"]) |
			   isset($_GET["table"])
			) {
				echo "<br>".
				"\n\t\t<hr>".
				"\n\t\t<h2>".
				"\n\t\t\t<span id=\"Output\">Output</span>".
				"\n\t\t</h2>".
				"\n";
				echo $_POST["adhoc"]; // the end result will probably be a 2D array that will map into a html table
			} 
		?>
	</body>
</html>
























