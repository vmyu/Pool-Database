<!DOCTYPE html>
<html>
 <head>
  <title>View and Edit Certifications</title>
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

<form action="cert_update.php" method="post">
 <?php 
 include_once 'db.php';
 
 
 echo "<h2>Edit a Certification</h2>";
 
 $cert_number =$_POST['cert_number'];
 
 $query= "SELECT * FROM employees, certificates, has WHERE cert_number = '$cert_number' AND employees.e_id = has.e_id;";
 
 $result=$conn->query($query);
 $row = $result->fetch_row();
printf("<input type=\"hidden\" name=\"cert_number\" value=\"%s\"/>",$row[13]);
echo "<b>Record on file</b><br>";
printf("Employee Name: %s",$row[6]);
printf(" %s<br>",$row[8]);
printf("Certification ID: %s<br>",$row[13]);
printf("Certification Date: %s<br>",$row[15]);
printf("Expiration Date: %s<br>",$row[16]);
printf("Certification Class Type: %s<br>",$row[17]);
printf("Class Date: %s<br><br><br>",$row[18]);

echo "<b>Select Certification Type</b><br>";

printf("Lifeguard Cert<input type=\"checkbox\" name=\"cert_id\" value=\"1000\"/><br>\n",$row[14]);
printf("Operator Cert<input type=\"checkbox\" name=\"cert_id\" value=\"1001\"/><br><br>\n",$row[14]);

printf("Certification Date(YYYY/MM/DD):<input type=\"text\" name=\"cert_date\" value=\"%s\"/><br>\n",$row[15]);
printf("Expiration Date(YYYY/MM/DD):<input type=\"text\" name=\"exp_date\" value=\"%s\"/><br>\n",$row[16]);
echo "<b>Select Certification Class Type</b><br>";

printf("Lifeguard Certification<input type=\"checkbox\" name=\"c_class\" value=\"LG Cert\"/><br>\n",$row[17]);
printf("Lifeguard Recertification(Returning Staff)<input type=\"checkbox\" name=\"c_class\" value=\"LG Recert\"/><br>\n",$row[17]);
printf("Operator's License<input type=\"checkbox\" name=\"c_class\" value=\"Operator Cert\"/><br><br>\n",$row[17]);

printf("Class Date(YYYY/MM/DD):<input type=\"text\" name=\"class_date\" value=\"%s\"/><br>\n",$row[18]);


?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>
</body>
</html>