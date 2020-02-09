<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Infractions - edit</title>
	
</head>

<body>
<div id="main">
	<h2>Group 6 - Pool Database</h2>
	<div id="nav">
		<a href="index.html">Home</a>
		<a href="employees.php">Employee Info</a>
		<a href="certificates.php">Certifications</a>
		<a href="pay_perform.php">Pay & Performance</a>
	</div>
	<div id="select">
	<h2>Select an infraction to edit</h2>
	<form action="inf_update.php" method="post">
	<?php
		include_once 'db.php';
 
		$inf_id =$_POST['inf_id'];
  
		$query = "select * from employees, infractions, has_infractions where employees.e_id = has_infractions.e_id and infractions.inf_id = has_infractions.inf_id and 
		infractions.inf_id = '$inf_id';";
 
		$result=$conn->query($query);
		$row = $result->fetch_row();
		
		printf("Infraction ID: <input type=\"text\" name=\"inf_id\" value=\"%s\"/><br />",$row[10]);		
		printf("First Name: <input type=\"text\" name=\"f_name\" value=\"%s\"/><br />",$row[6]);
		printf("Last Name: <input type=\"text\" name=\"l_name\" value=\"%s\"/><br />",$row[8]);
		printf("Infraction report: <input type=\"text\" name=\"report\" value=\"%s\"/><br />",$row[11]);
		printf("Action taken: <input type=\"text\" name=\"action\" value=\"%s\"/><br />",$row[12]);
		
	?>
	<input type="Submit" value= "Update" class="button"/><input type="Reset" class="button"/><br /><br />
	<a href="http://pluto.hood.edu/~group6/infractions.php">Back to infractions</a>
	</form>
	</div>
</div>
</body>
</html>