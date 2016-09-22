<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a", $con);

$sql="UPDATE package_details set package_id='$_POST[nm6]',location='$_POST[nm]',date='$_POST[nm4]'
 where package_id='$_POST[nm6]'";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "DATA MODIFIED";

mysql_close($con);

?>