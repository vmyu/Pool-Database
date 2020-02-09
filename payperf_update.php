<!DOCTYPE html>
<html>
 <head>
  <title>Pay & Performance Updated</title>
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
$p_id = $_POST['p_id'];
$position=$_POST['position'];
$schedule=$_POST['schedule'];
$refresher=$_POST['refresher'];
$in_service=$_POST['in_service'];
$vp_no=$_POST['vp_no'];
$notes=$_POST['notes'];



$query= "update works, performance, earns set position = '$position', schedule = '$schedule', refresher = '$refresher', in_service = '$in_service', earns.vp_no = '$vp_no', notes = '$notes' WHERE works.e_id = $e_id AND works.p_id = $p_id AND performance.p_id = $p_id AND earns.p_id = $p_id;";

if($conn->query($query))
{
   echo "<h2>Update is successful!</h2>";
   include 'display.php';
   display("SELECT employees.e_id AS 'ID', f_name AS 'First Name', m_init AS 'M', l_name AS 'Last Name', position AS 'Position', schedule AS 'Schedule', refresher AS 'Refresher', in_service AS 'In-Service', earns.vp_no AS 'VP #', wage AS 'Wage', notes AS 'Notes' FROM employees, works, performance, earns, pay_rate WHERE employees.e_id = works.e_id AND works.p_id = performance.p_id AND performance.p_id = earns.p_id AND earns.vp_no = pay_rate.vp_no;");	
}
else
{
	 echo "update failed: (" . $conn->errno . ") " . $conn->error;
}
$conn->close();
?>
	<br/>
<form action="payperf_edit.php" method="post" align="center">
<h2>View and Edit an Employee's Pay & Performance: </h2>
Employee ID: <input type="text" name="e_id"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>
</div>
</body>
</html>