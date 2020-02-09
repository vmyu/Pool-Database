<!DOCTYPE html>
<html>
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>New Employee</title>
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
	<h2>Add a New Employee</h2>
	
	<form action="emp_add.php" method="post">
	    <label>Employee ID:</label> <input type="text" name="e_id"/><br>
	    <label>First Name: </label> <input type="text" maxlength="30" name="f_name"/><br>
	    <label>Initial:</label> <input type="text" maxlength="1" name="m_init"/><br>
		<label>Last Name:</label> <input type="text" maxlength="30" name="l_name"/><br>
		<label>SSN:</label> <input type="text" maxlength="11" name="ssn"/><br>
		<label>Age:</label> <input type="text" maxlength="3" name="age"/><br>
		<label>Street:</label> <input type="text" maxlength="50" name="street"/><br>
		<label>County:</label> <input type="text" maxlength="25" name="county"/><br>
		<label>City:</label> <input type="text" maxlength="20" name="city"/><br>
		<label>Zip:</label> <input type="text" maxlength="5" name="zip"/><br>
		<label>E-Mail:</label> <input type="text" maxlength="50" name="email"/><br>
		<label>Phone:</label> <input type="text" maxlength="12" name="phone"/><br>
		<label>Education:</label> <input type="text" maxlength="15" name="education"/><br>
		<label>Hire Date: (yyyy-mm-dd)</label> <input type="text" maxlength="10" name="hire_date"/><br>
		
	    <input type="Submit" value= "Add" class="button"/><input type="Reset" class="button"/>
	</form>
	</div>
    </body>
   </html>