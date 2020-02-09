<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Employees</title>
	
</head>

<body>
<div id="main">
	<h2>Group 6 - Pool Database</h2>
	<div id="nav">
		<a href="index.html">Home</a>
		<a href="employees.php"><span>Employee Info</span></a>
		<a href="certificates.php">Certifications</a>
		<a href="pay_perform.php">Pay & Performance</a>
	</div>
	<div id="content_main">
	<h2>Employees</h2>
	<?php 
		 include 'db.php';
		 include 'display.php';
	display("SELECT employees.e_id AS 'Emp ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', ssn AS 'SSN', age AS 'Age', street AS 'Street', county AS 'County', city AS 'City', zip AS 'Zip', email AS 'E-Mail', phone AS 'Phone #', education AS 'Education', hire_date AS 'Hire Date' FROM employees, employee_address WHERE employees.e_id = employee_address.e_id;");
	?>	
		<br />
<a style="font-size:1.1em;" href="http://pluto.hood.edu/~group6/infractions.php">Check for infractions...</a>
	
<table align="center">
<tr>
<td>
<form action="emp_edit.php" method="post">
<h2>View and Edit Employee: </h2>
Employee ID: <input type="text" name="e_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</td>
<td>
<a href="new_emp.php">Add a New Employee</a>
</td>
<td>
<form action="del_emp.php" method="post">
	<h2> Delete an Employee:</h2>
	    Employee ID: <input type="text" name="e_id"/><br>
	    <input type="submit" value= "Delete"/><input type="reset"/>
	</form>
</td>
</tr>
</table>
</div>
</body>
</html>
