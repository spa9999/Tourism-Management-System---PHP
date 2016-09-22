<?php


$con=mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a")or die("Connection Failed to select database");

$loc="$_POST[location]";

$result = mysql_query("SELECT * FROM package_details where location='$loc'");
if (mysql_num_rows($result)>0)
{
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
}
else echo"no records found";
mysql_close($con);
?>