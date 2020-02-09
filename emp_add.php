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


$query_emp= "insert into employees (employees.e_id, f_name, m_init, l_name, ssn, age, email, phone, education, hire_date) values('$e_id', '$f_name', '$m_init', '$l_name', '$ssn', '$age', '$email', '$phone', '$education', '$hire_date')";
$query_add= "insert into employee_address(e_id, street, county, city, zip) values ('$e_id', '$street', '$county', '$city', '$zip')";

if($conn->query($query_emp) AND $conn->query($query_add)){
      
       echo "<h2>Data added sucessfully!</h2>";
	include 'display.php';
   display("SELECT employees.e_id AS 'ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', ssn AS 'SSN', age AS 'Age', street AS 'Street', county AS 'County', city AS 'City', zip AS 'Zip', email AS 'E-Mail', phone AS 'Phone #', education AS 'Education', hire_date AS 'Hire Date' FROM employees, employee_address WHERE employees.e_id = employee_address.e_id;");
   }
else
{
	 echo "Insertion failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();


?>
<h2>Please add Pay & Performance data for the new employee:</h2> <a href="payperf_new.php">Pay & Performance</a>
</body>
</html>
