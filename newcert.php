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
<?php 
include_once 'db.php';

$e_id = $_POST['e_id'];
$cert_number = $_POST['cert_number'];
$cert_id = $_POST['cert_id'];
$cert_date = $_POST['cert_date'];
$exp_date = $_POST['exp_date'];
$c_class = $_POST['c_class'];
$class_date = $_POST['class_date'];


$query_has= "insert into has (e_id,cert_number,cert_id,cert_date,exp_date,c_class,class_date) values('$e_id', '$cert_number', '$cert_id', '$cert_date', '$exp_date', '$c_class', '$class_date')";

if($conn->query($query_has)){
      
       echo "<h2>Data added sucessfully!</h2>";
	include 'display.php';
			display("SELECT has.cert_number as 'Certification ID',employees.e_id AS 'Employee ID',f_name as 'First Name', l_name as 'Last Name',certificates.cert_name as 'Certification', has.c_class as 'Cert Class', has.class_date as 'Class Date', has.cert_date as 'Cert Issued', has.exp_date as 'Expiration Date' FROM employees, has, certificates where employees.e_id = has.e_id and certificates.cert_id = has.cert_id ORDER BY cert_number;");	
}
else
{
	 echo "Insertion failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();


?>

</body>
</html>
