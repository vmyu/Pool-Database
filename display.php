
<!DOCTYPE html>
<html>
 <head>
  <title>Display </title>
 </head>

<body>
<?php 

function display($query_string){
global $conn;
$result = $conn->query($query_string);

//Number of columns of the most recent query result.
$num_c = $conn->field_count;



//extract column names
$fieldinfo = $result->fetch_fields();


echo "<table>\n";

//display table headers
echo "<tr>";
foreach ($fieldinfo as $val){
	echo "<th>" . $val->name . "</th>";
}
echo "</tr>";

while($row = $result->fetch_row()){
	
	echo "<tr>";
	$i = 0;
       while($i < $num_c)
	{
		echo "<td>". $row[$i]. "</td>";
		$i++;
	}
	echo "</tr>";
}

echo "</table>";
}

?>
</body>
</html>
