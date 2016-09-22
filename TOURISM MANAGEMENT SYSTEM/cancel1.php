<?php

$con=mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a")or die("Connection Failed to select database");

$fnum="$_POST[nm]";

$id=$_COOKIE["id"];

echo"Flight ticket for:->$_POST[nm1] is cancelled by $id ";
echo"</br>";
echo"cancellation DETAILS:";


$result = mysql_query("SELECT * FROM flights where flight_number='$fnum'"); 

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

$id=$_COOKIE["id"];
$x=$_POST["nm"];

$sql="DELETE FROM booking WHERE cus_name='$id' and fli_num='$x' ";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo"TICKET CANCELLED";




$query="select seats from flights where flight_number='$fnum'";

$result=mysql_query($query);

$result1=mysql_fetch_array($result);

$useats=$result1[0];
$useats=($useats+1);

echo"<br/>";
echo"remaining seats:".$useats;



$sql="UPDATE flights set seats='$useats' where flight_number='$fnum'";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }



mysql_close($con);
?>