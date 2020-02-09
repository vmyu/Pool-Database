<!DOCTYPE html>
<html>
 <head>
  <title>View and Edit Employee</title>
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

<form action="emp_update.php" method="post">
 <?php 

 printf("<input type=\"hidden\" name=\"e_id\" value=\"%s\"/><br>\n",$row[0]);
 printf("First Name: <input type=\"text\" name=\"f_name\" maxlength=\"30\" value=\"%s\"/><br>",$row[6]);
 printf("Initial: <input type=\"text\" name=\"m_init\" maxlength=\"1\" value=\"%s\"/><br>",$row[7]);
 printf("Last Name: <input type=\"text\" name=\"l_name\"  maxlength=\"30\" value=\"%s\"/><br>",$row[8]);


?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>
</body>
</html>
