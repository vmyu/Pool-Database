<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Certifications</title>
	
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
		<h2>Certifications</h2>
		<?php 
			include 'db.php';
			include 'display.php';
			display("SELECT has.cert_number as 'Certification ID',employees.e_id AS 'Employee ID',f_name as 'First Name', l_name as 'Last Name',certificates.cert_name as 'Certification', has.c_class as 'Cert Class', has.class_date as 'Class Date', has.cert_date as 'Cert Issued', has.exp_date as 'Expiration Date' FROM employees, has, certificates where employees.e_id = has.e_id and certificates.cert_id = has.cert_id ORDER BY cert_number;");	
		?>
		<br />
		<a href="retrieveexpiredcerts.php">Check for expired certifications</a>

	<br>
<table align="center">
<tr>
<td>
<form action="cert_editform.php" method="post">
<h2>View and Edit Certification: </h2>
Certification ID: <input type="text" name="cert_number"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</td>
<td>
<a href="newcert_form.php">Add a New Certification</a>
</td>
<td>
<form action="delete_cert.php" method="post">
	<h2> Delete a Certification:</h2>
	    Certification ID: <input type="text" name="cert_number"/><br>
	    <input type="submit" value= "Delete"/><input type="reset"/>
	</form>
</td>
</tr>
</table>
</div>
</body>
</html>
		
		
		