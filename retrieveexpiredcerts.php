<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" />
	<title>Expired Certifications</title>
	
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
		<h2>Expired Certifications</h2>
		<script language="javascript">

</script> 
		<?php 
			include 'db.php';
			include 'display.php';

			display("SELECT has.cert_number as 'Certification ID',f_name as 'First Name', l_name as 'Last Name',has.exp_date as 'Expiration Date' FROM employees, has, certificates where employees.e_id = has.e_id AND certificates.cert_id = has.cert_id AND DATE(exp_date) between '2000-01-01' AND CURDATE() ORDER BY cert_number;");	
		?>
	<br>
<a href="orderbyexpdate.php">Sort all certifications by expiration</a><br />
<br /><br />
<a href="http://pluto.hood.edu/~group6/certificates.php">Go back...</a>
</div>
</body>
</html>
		
		
		