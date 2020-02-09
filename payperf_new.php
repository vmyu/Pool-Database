<!DOCTYPE html>
<html>
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>Add Pay & Performance</title>
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
	
	<h2>Add Pay & Performance</h2>
	<h5>Existing performance records:</h5>
	<?php
		include_once 'db.php';
		include 'display.php';
		display("SELECT employees.e_id AS 'Emp ID', works.p_id AS 'Perf ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', position AS 'Position', schedule AS 'Schedule', refresher AS 'Refresher', in_service AS 'In-Service', earns.vp_no AS 'VP #', wage AS 'Wage', notes AS 'Notes' FROM employees, works, performance, earns, pay_rate WHERE employees.e_id = works.e_id AND works.p_id = performance.p_id AND performance.p_id = earns.p_id AND earns.vp_no = pay_rate.vp_no;");
	?>
	<form action="payperf_add.php" method="post">
	    <label>Employee ID:</label> <input type="text" name="e_id"/><br>
		<label>Performance ID:</label> <input type="text" name="p_id"/><br>
	    <label>Position: </label> <input type="text" maxlength="10" name="position"/><br>
	    <label>Schedule:</label> <input type="text" name="schedule"/><br>
		<label>Refresher:</label> <input type="text" maxlength="1" name="refresher"/> 1 for Yes, 0 for No<br>
		<label>In-Service:</label> <input type="text" maxlength="1" name="in_service"/> 1 for Yes, 0 for No<br>
		<label>VP #:</label> <input type="text" name="vp_no"/><br>
		<label>Notes:</label> <input type="text" name="notes"/><br>
		
	    <input type="Submit" value= "Add"/><input type="Reset"/>
	</form>
	</div>
    </body>
   </html>