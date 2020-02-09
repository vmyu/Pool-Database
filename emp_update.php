<!DOCTYPE html>
<html>
 <head>
  <title>Employee Updated</title>
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

$e_id = $_POST['e_id'];
$f_name=$_POST['f_name'];
$m_init=$_POST['m_init'];
$l_name=$_POST['l_name'];
$ssn=$_POST['ssn'];
$age=$_POST['age'];
$street=$_POST['street'];
$county=$_POST['county'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$education=$_POST['education'];
$hire_date=$_POST['hire_date'];


$query= "update employees, employee_address set f_name = '$f_name', m_init = '$m_init', l_name = '$l_name', ssn = '$ssn', age = '$age', street = '$street', county = '$county', city = '$city', zip = '$zip', email = '$email', phone = '$phone', education = '$education', hire_date = '$hire_date' WHERE employees.e_id = $e_id AND employee_address.e_id = $e_id;";

if($conn->query($query))
{
   echo "<h2>Update is successful!</h2>";
   include 'display.php';
   display("SELECT employees.e_id AS 'ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', ssn AS 'SSN', age AS 'Age', street AS 'Street', county AS 'County', city AS 'City', zip AS 'Zip', email AS 'E-Mail', phone AS 'Phone #', education AS 'Education', hire_date AS 'Hire Date' FROM employees, employee_address WHERE employees.e_id = employee_address.e_id;");
}
else
{
	 echo "update failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();
?>
	<br />
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

