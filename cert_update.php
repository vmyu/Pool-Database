<!DOCTYPE html>
<html>
 <head>
  <title>Certification Updated</title>
  <link rel="stylesheet" href="style.css" />
 </head>
<body>
<div id="main">
	<h2>Group 6 - Pool Database</h2>
	<div id="nav">
		<a href="index.html">Home</a>
		<a href="employees.php">Employee Info</a>
		<a href="certificates.php">Certifications</a>
	</div>
	<div id="content_main">


<?php 

include_once 'db.php';

$cert_number = $_POST['cert_number'];
$e_id = $_POST['e_id'];
$cert_id=$_POST['cert_id'];
$cert_date=$_POST['cert_date'];
$exp_date=$_POST['exp_date'];
$c_class=$_POST['c_class'];
$class_date=$_POST['class_date'];

$query= "update employees E, has H set cert_id = '$cert_id', cert_date = '$cert_date', exp_date = '$exp_date', c_class = '$c_class', class_date = '$class_date' WHERE E.e_id = H.e_id AND cert_number = '$cert_number';";

if($conn->query($query))
{
   echo "<h2>Update is successful!</h2>";
   include 'display.php';
			display("SELECT has.cert_number as 'Certification ID',employees.e_id AS 'Employee ID',f_name as 'First Name', l_name as 'Last Name',certificates.cert_name as 'Certification', has.c_class as 'Cert Class', has.class_date as 'Class Date', has.cert_date as 'Cert Issued', has.exp_date as 'Expiration Date' FROM employees, has, certificates where employees.e_id = has.e_id and certificates.cert_id = has.cert_id ORDER BY cert_number;");	
}
else
{
	 echo "update failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();
?>
	<br/>
<form action="cert_editform.php" method="post" align="center">
<h2>Edit a Certification: </h2>
Certification ID: <input type="text" name="cert_number"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</div>
</body>
</html>