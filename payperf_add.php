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
<?php 
include_once 'db.php';

$e_id = $_POST['e_id'];
$p_id=$_POST['p_id'];
$position=$_POST['position'];
$schedule=$_POST['schedule'];
$refresher=$_POST['refresher'];
$in_service=$_POST['in_service'];
$vp_no=$_POST['vp_no'];
$notes=$_POST['notes'];

$query_perf= "insert into performance(p_id, schedule, refresher, in_service, notes) values ('$p_id', '$schedule', '$refresher', '$in_service', '$notes')";
$query_works= "insert into works (e_id, p_id, position) values('$e_id', '$p_id', '$position')";
$query_earns= "insert into earns(p_id, vp_no) values ('$p_id', '$vp_no')";

if($conn->query($query_perf) AND $conn->query($query_works) AND $conn->query($query_earns)){
      
       echo "<h2>Data added sucessfully!</h2>";
	include 'display.php';
   display("SELECT employees.e_id AS 'ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', position AS 'Position', schedule AS 'Schedule', refresher AS 'Refresher', in_service AS 'In-Service', earns.vp_no AS 'VP #', wage AS 'Wage', notes AS 'Notes' FROM employees, works, performance, earns, pay_rate WHERE employees.e_id = works.e_id AND works.p_id = performance.p_id AND performance.p_id = earns.p_id AND earns.vp_no = pay_rate.vp_no;");	
	}
else
{
	 echo "Insertion failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();


?>

</body>
</html>
