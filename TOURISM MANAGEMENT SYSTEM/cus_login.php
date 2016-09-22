<?php
mysql_connect("localhost","root","") or die("Connection Failed to database");
mysql_select_db("a")or die("Connection Failed to select database");

$userid=$_POST["firstname"];
$pass=$_POST["pass"];

$query="select * from cus_login where username='$userid'";

$result=mysql_query($query);

while($result1=mysql_fetch_array($result))

{if($userid==$result1[0]&&$pass==$result1[1])

{ 
setcookie('id',$userid,time() + (86400 * 7));

header("Location:customerhome.html");

 }

 else

echo "invalid username or password";

}

?>