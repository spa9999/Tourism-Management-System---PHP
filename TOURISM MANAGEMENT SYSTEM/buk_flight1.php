<?php


$con=mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a")or die("Connection Failed to select database");

$source=$_POST["source"];
$dest=$_POST["destination"];

$result = mysql_query("SELECT * FROM flights where source='$source' and destination='$dest'");
if (mysql_num_rows($result)>0)
{
echo "<table border='1'>
<tr>
<th>Flightnumber</th>
<th>Airlinename</th>
<th>source</th>
<th>destination</th>
<th>fare</th>
<th>date</th>
</tr>";

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
}

else echo"no records found";     
mysql_close($con);
?>