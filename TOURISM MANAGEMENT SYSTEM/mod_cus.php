<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a", $con);

$sql="UPDATE customer set addr='$_POST[nm4]',Age='$_POST[nm6]',num='$_POST[nm8]',mailid='$_POST[nm55]' where Name='$_POST[nm]';
";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "DATA MODIFIED";

mysql_close($con);

?>