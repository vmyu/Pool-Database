<!DOCTYPE html>
<html>
	<head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>New Infraction</title>
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

$inf_id = $_POST['inf_id'];
$e_id = $_POST['e_id'];
$report = $_POST['report'];
$action = $_POST['action'];
$susp = $_POST['susp'];


$query_inf= "insert into infractions (infractions.inf_id, report, action, susp) values ('$inf_id', '$report', '$action', '$susp');";
$query_hinf="insert into has_infractions (inf_id, e_id) values ('$inf_id', '$e_id');";

if($conn->query($query_inf) AND $conn->query($query_hinf)){
      
       echo "<h2>Data added sucessfully!</h2>";
	include 'display.php';
   display("select infractions.inf_id as 'Inf ID', employees.e_id as 'Emp ID', employees.f_name as 'First', employees.l_name as 'Last', infractions.report as 'Infraction', infractions.action as 'Action taken' from employees, infractions, has_infractions where employees.e_id = has_infractions.e_id and has_infractions.inf_id = infractions.inf_id;");
   }
else
{
	 echo "Insertion failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();

?>
<br /><br />
<a href="http://pluto.hood.edu/~group6/infractions.php">Go back to infractions...</a>
</body>
</html>
