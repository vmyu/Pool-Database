<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Infractions</title>
	
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
		<h2>Current Infractions</h2>
		<?php 
			include 'db.php';
			include 'display.php';
			display("select infractions.inf_id as 'Inf ID', employees.e_id as 'Emp ID', employees.f_name as 'First', employees.l_name as 'Last', infractions.report as 'Infraction', infractions.action as 'Action taken' from employees, infractions, has_infractions where employees.e_id = has_infractions.e_id and has_infractions.inf_id = infractions.inf_id;");
		?>
	<br />
<table align="center">
	<tr>
		<td>
			<form action="inf_edit.php" method="post">
				<h2>Edit Infractions: </h2>
				Infraction ID: <input type="text" name="inf_id"/><br>
				<input type="Submit" value= "Select"/><input type="Reset"/>
			</form>
		</td>
		<td>
			<a href="new_inf.php">Add Infraction</a>
		</td>
		<td>
			<form action="inf_del.php" method="post">
			<h2> Delete an Infraction:</h2>
			Infraction ID: <input type="text" name="inf_id"/><br>
			<input type="submit" value= "Delete"/><input type="reset"/>
			</form>
		</td>
	</tr>
</table>
</div>
</body>
</html>