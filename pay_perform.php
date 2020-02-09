<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Pay & Performance</title>
	
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
	<?php 
 include_once 'db.php';
 echo "<h2> Employees' Pay & Performance</h2>";
include 'display.php';
			display("SELECT employees.e_id AS 'Emp ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', position AS 'Position', schedule AS 'Schedule', refresher AS 'Refresher', in_service AS 'In-Service', earns.vp_no AS 'VP #', wage AS 'Wage', notes AS 'Notes' FROM employees, works, performance, earns, pay_rate WHERE employees.e_id = works.e_id AND works.p_id = performance.p_id AND performance.p_id = earns.p_id AND earns.vp_no = pay_rate.vp_no;");	
	
		?>	
		<br>
	<table align="center">
<tr>
<td>
<form action="payperf_edit.php" method="post">
<h2>View and Edit an Employee's Pay & Performance: </h2>
Employee ID: <input type="text" name="e_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</td>
</tr>
</table>
</div>
</body>
</html>