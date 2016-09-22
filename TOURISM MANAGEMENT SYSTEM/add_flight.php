<?php

$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   
mysql_select_db("a", $con);

$sql="INSERT INTO flights (flight_number,airline_name,source,destination,fare,arriva_date) VALUES ('$_POST[nm]','$_POST[nm4]','$_POST[nm6]','$_POST[nm8]','$_POST[nm9]','$_POST[nm55]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "1 flight datails added";

echo"<br/>";

echo"UPDATED FLIGHT list:";


$result = mysql_query("SELECT * FROM flights"); 

echo "<table border='1'>
<tr>
<th>FLIGHT NUMBER</th>
<th>AIRLINE NAME</th>
<th>SOURCE</th>
<th>DESTINATION</th>
<th>FARE</th>
<th>ARRIVAL DATE</th>
<th>SEATS</th>
<tr/>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['flight_number'] . "</td>";
  echo "<td>" . $row['airline_name'] . "</td>";
  echo "<td>" . $row['source'] . "</td>";
  echo "<td>" . $row['destination'] . "</td>";
  echo "<td>" . $row['fare'] . "</td>";
  echo "<td>" . $row['arriva_date'] . "</td>"; 
  echo "<td>" . $row['seats'] . "</td>";
echo "</tr>";
  }
echo "</table>";



mysql_close($con);

?>