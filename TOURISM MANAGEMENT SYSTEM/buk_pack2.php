<?php

$con=mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a")or die("Connection Failed to select database");

$pid="$_POST[nm55]";



echo"PACKAGE booked by:-> $_POST[nm11]";
echo"</br>";
echo"BOOKING DETAILS:";

$result = mysql_query("SELECT * FROM package_details where package_id='$pid'"); 

echo "<table border='1'>
<tr>
<th>Package-ID</th>
<th>location</th>
<th>date</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['package_id'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
 
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>