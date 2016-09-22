<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a", $con);

$sql="UPDATE flights set flight_number='$_POST[nm]',airline_name='$_POST[nm4]',source='$_POST[nm6]',destination='$_POST[nm8]',fare='$_POST[nm9]',arriva_date='$_POST[nm9]'
 where flight_number='$_POST[nm]' and airline_name='$_POST[nm4]'";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "DATA MODIFIED";

mysql_close($con);

?>