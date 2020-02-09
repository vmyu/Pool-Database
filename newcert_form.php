<!DOCTYPE html>
<html>
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>New Certification</title>
       <link rel="stylesheet" href="style.css" />
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
	
	<h2>Add a New Certification Record</h2>
	
	<form action="newcert.php" method="post">
	    <label>Employee ID:</label> <input type="text" name="e_id"/><br>
	    <label>Certification ID: </label> <input type="text" name="cert_number"/><br>
	    <label>Certification Type: </label> 
	    
	    <select name="cert_id">
	    <option value="">Select...</option>
	    <option value="1000">Lifeguard Cert</option>
	    <option value="1001">Operator Cert</option>
	    </select><br>
	    
	    <label>Certification Date(YYYY/MM/DD):</label> <input type="text" name="cert_date"/><br>
	    <label>Expiration Date(YYYY/MM/DD):</label> <input type="text" name="exp_date"/><br>
		Certification Class Information: <br>
	    <label>Certification Class Type:</label>
	    
	    <select name="c_class">
	    <option value="">Select...</option>
	    <option value="LG Cert">Lifeguard Certification</option>
	    <option value="LG Recert">Lifeguard Recertification(Returning Staff)</option>
	    <option value="Operator Cert">Operator's License</option>
	    </select><br>
	    
	    <label>Certification Class Date(YYYY/MM/DD):</label> <input type="text" name="class_date"/><br>
	    <input type="Submit" value= "Add" class="button"/><input type="Reset" class="button"/>
	</form>

	</div>
    </body>
   </html>