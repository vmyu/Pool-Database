<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Add a New Infraction</title>
	
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
	<div id="content_main">
		<h2>Add a New Infraction</h2>
		<h4>Employees:</h4>
		<?php 
			include 'db.php';
			include 'display.php';
			display("select employees.e_id as 'Emp ID', employees.f_name as 'First', employees.l_name as 'Last' from employees;");
		?>
	</div>
	<div id="select">	
	<br /><br />
	<form action="inf_add.php" method="post">
		 <label>Infraction ID: </label><input type="text" name="inf_id"/><br />
	    <label>Employee ID: </label><input type="text" name="e_id"/><br />
	    <label>Infraction report: </label><input type="text" name="report"/><br />
	    <label>Action taken </label><input type="text" name="action"/><br />
	    <label>Suspended? </label>
	    <select name="susp">
	    <option value="">Select...</option>
	    <option value="1">Yes</option>
	    <option value="0">No</option>
	    </select><br />
	    <input type="Submit" value= "Add" class="button"/><input type="Reset" class="button"/>
	</form>
	</div>
</div>
</body>
</html>