<!DOCTYPE html>
<html>
 <head>
  <title>View and Edit an Employee's Pay & Performance</title>
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

<form action="payperf_update.php" method="post">
 <?php 
 include_once 'db.php';
 
 
 echo "<h2>Edit an Employee's Pay & Performance</h2>";
 
 $e_id =$_POST['e_id'];
 
 $query= "SELECT * FROM employees, works, performance, earns, pay_rate WHERE employees.e_id = '$e_id' AND employees.e_id = works.e_id AND works.p_id = performance.p_id AND performance.p_id = earns.p_id AND earns.vp_no = pay_rate.vp_no;";
 
 $result=$conn->query($query);
 $row = $result->fetch_row();
 
 printf("<input type=\"hidden\" name=\"e_id\" value=\"%s\"/><br>\n",$row[0]);
 printf("<input type=\"hidden\" name=\"p_id\" value=\"%s\"/><br>\n",$row[11]);
 printf("First Name: %s<br>",$row[6]);
 printf("Initial: %s<br>",$row[7]);
 printf("Last Name: %s<br>",$row[8]);
 printf("Position: <input type=\"text\" name=\"position\" value=\"%s\"/><br>",$row[12]);
 printf("Schedule: <input type=\"text\" name=\"schedule\" value=\"%s\" class=\"widefield\"/><br>",$row[14]);
  printf("Refresher: <input type=\"text\" name=\"refresher\" value=\"%s\"/> 1 for Yes, 0 for No<br>",$row[15]); 
 printf("In-Service: <input type=\"text\" name=\"in_service\" value=\"%s\"/> 1 for Yes, 0 for No<br>",$row[16]);
  printf("VP #: <input type=\"text\" name=\"vp_no\" value=\"%s\"/><br>",$row[19]);
 printf("Notes: <input type=\"text\" name=\"notes\" value=\"%s\" class=\"widefield\"/><br>",$row[17]);

?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>
</body>
</html>