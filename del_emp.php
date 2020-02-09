<!DOCTYPE html>
<html>

	<head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>Delete an Employee</title>
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
<?php 
include_once 'db.php';

$e_id=$_POST['e_id'];

$query_has = "delete from has where e_id = '$e_id';";
$query_works = "delete from works where e_id = '$e_id'";
$query_add = "delete from employee_address where e_id = '$e_id';";
$query_emp= "delete from employees where e_id = '$e_id';";


if($conn->query($query_has)AND $conn->query($query_works) AND $conn->query($query_add) AND $conn->query($query_emp)){
   echo "<h2>Data deleted sucessfully!</h2>";
   include 'display.php';
   display("SELECT employees.e_id AS 'ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', ssn AS 'SSN', age AS 'Age', street AS 'Street', county AS 'County', city AS 'City', zip AS 'Zip', email AS 'E-Mail', phone AS 'Phone #', education AS 'Education', hire_date AS 'Hire Date' FROM employees, employee_address WHERE employees.e_id = employee_address.e_id;");
}
else
{
	 echo "Deletion filed failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();
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
</body>
</html>
