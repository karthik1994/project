<?php
require 'connection.php';

$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];

$result1=mysql_query("SELECT Password from user_info WHERE Username='".$uname."'");
if(!$result1)
echo (mysql_error());
while($row=mysql_fetch_row($result1))
$pass=$row[0];
if($pass==$pwd)
die(header("Location:home.php"));
else
die(header("Location:5.php"));

?>
