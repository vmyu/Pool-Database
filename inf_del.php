<!DOCTYPE html>
<html>

	<head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <title>Delete an Infraction</title>
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

$inf_id=$_POST['inf_id'];

$query_inf = "delete from infractions where inf_id = '$inf_id';";


if($conn->query($query_inf)){
   echo "<h2>Data deleted sucessfully!</h2>";
   include 'display.php';
   display("select infractions.inf_id as 'Inf ID', employees.e_id as 'Emp ID', employees.f_name as 'First', employees.l_name as 'Last', infractions.report as 'Infraction', infractions.action as 'Action taken' from employees, infractions, has_infractions where employees.e_id = has_infractions.e_id and has_infractions.inf_id = infractions.inf_id;");
	
}
else
{
	 echo "Deletion failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();
?>

</body>
</html>
