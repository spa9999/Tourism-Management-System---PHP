<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a", $con);

$sql="DELETE FROM customer WHERE name='$_POST[nm]' and mailid='$_POST[nm55]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo"customer deleted";

echo"<br/>";

echo"UPDATED customer list:";


$result = mysql_query("SELECT * FROM customer"); 

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Address</th>
<th>Age</th>
<th>Number</th>
<th>Mail-id</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['addr'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['num'] . "</td>";
  echo "<td>" . $row['mailid'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>