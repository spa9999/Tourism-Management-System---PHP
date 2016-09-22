<?php

$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   
mysql_select_db("a", $con);

$sql="INSERT INTO package_details VALUES ('$_POST[nm6]','$_POST[nm]','$_POST[nm4]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "1 package datails added";

echo"<br/>";

echo"UPDATED PACKAGE list:";


$result = mysql_query("SELECT * FROM package_details"); 

echo "<table border='1'>
<tr>
<th>package-id</th>
<th>Location</th>
<th>Date</th>

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