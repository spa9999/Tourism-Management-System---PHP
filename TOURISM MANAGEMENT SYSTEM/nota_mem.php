<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a", $con);

$a=$_POST['nm'];
$b=$_POST['nm1'];
$c=$_POST['2nm'];
$d=$_POST['nm4'];
$e=$_POST['nm6'];
$f=$_POST['nm8'];
$g=$_POST['nm55'];
$sql="INSERT INTO notamem VALUES ('$a','$b','$c','$d','$e','$f','$g')";
$v="INSERT INTO cus_login VALUES ('$a','$b')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "successful signup";

mysql_query($v);
echo"<a href=\"customerlogin.html\">proceed</a>";

mysql_close($con);

?>