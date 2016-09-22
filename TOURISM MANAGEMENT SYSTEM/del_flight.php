<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a", $con);

$x="$_POST[nm]";
$y="$_POST[nm4]";

$sql="delete from flights where flight_number='$x' and airline_name='$y'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 flight deleted";

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
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);

?>