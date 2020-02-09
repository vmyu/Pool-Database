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

printf("Employee ID: %s<br>",$row[0]);
printf("Employee Name: %s",$row[6]);
printf(" %s<br>",$row[8]);
printf("Cert Type:<input type=\"text\" name=\"cert_id\" value=\"%s\"/> (1000 for Lifeguard, 1001 for Operator) <br>\n",$row[14]);
printf("Certification Date:<input type=\"text\" name=\"cert_date\" value=\"%s\"/><br>\n",$row[15]);
printf("Expiration Date:<input type=\"text\" name=\"exp_date\" value=\"%s\"/><br>\n",$row[16]);
printf("Cert Class Type:<input type=\"text\" name=\"c_class\" value=\"%s\"/><br>\n",$row[17]);
printf("Class Date:<input type=\"text\" name=\"class_date\" value=\"%s\"/><br>\n",$row[18]);


?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>
</body>
</html>