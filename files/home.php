<?php
require 'connection.php';

if(isset($_POST['submit']))
{
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$uname=$_REQUEST['uname'];
$rno=$_REQUEST['rno'];
$dept=$_REQUEST['dept'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$pwd=$_REQUEST['pwd'];
$cpwd=$_REQUEST['cpwd'];

$q="SELECT Password from user_info WHERE Username='".$uname."'";
$query="INSERT INTO user_info (User_Id, First_Name, Last_Name, Username, Roll_No, Department, Address, Phone_No, Password) VALUES ('NULL', '$fname', '$lname', '$uname', '$rno', '$dept', '$address', '$phone', '$pwd');"; 
$result=mysql_query($query);
if(!$result)
echo (mysql_error());
}

?>

<html>
<head>
<title>home</title>
<link rel='stylesheet' type='text/css' href='style.css'>
<style>
#a {border:4px outset black; background-color:#888888;}

</style>
<script>
<!--
var i=0;

function f()
{
i++;
if(i==8)
i=1;
switch(i)
{
case 1:document.k.src='71.jpg';break;
case 2:document.k.src='72.jpg';break;
case 3:document.k.src='73.jpg';break;
case 4:document.k.src='82.jpg';break;
case 5:document.k.src='83.jpg';break;
case 6:document.k.src='85.jpg';break;
case 7:document.k.src='86.jpg';break;
}
v=setTimeout("f()",2000)
}

function f1(arg,btn)
{
var k=document.getElementById(arg);
var z=document.getElementById(btn);
k.style.height='75px';
z.style.color="red";
z.style.height="60px";
}
function f2(arg,btn)
{
var q=document.getElementById(arg);
var p=document.getElementById(btn);
q.style.height='50px';
p.style.color="black";
p.style.height="50px";
}


-->
</script>
</head>
<body onload="f();">
<div id='top' name='top'>
<br>
<h1 name='p'>WELCOME</h1>
</br>
</div>
<div id='image'>
<img src='71.jpg' width=300px; height=300px; name='k'>
</div>
<br><br>
<table id='menu' outline='none' name='menu'>
<tr>
<td id='home' name='home' onmouseover="f1('home','a');" onmouseout="f2('home','a');">
<button class='btn' id='a'>
Home
</button>
</td>
</tr>
<tr>
<td id='profile' name='profile' onmouseover="f1('profile','b');" onmouseout="f2('profile','b');">
<button class='btn' id='b' onclick="window.location.href='profile.php'">
View Profile
</button>
</td>
</tr>
<tr>
<td id='new' name='new' onmouseover="f1('new','c');" onmouseout="f2('new','c');">
<button class='btn' id='c' onclick="window.location.href='menu.php'">
Menu
</button>
</td>
</tr>
<tr>
<td id='reserve' name='reserve' onmouseover="f1('reserve','d');" onmouseout="f2('reserve','d');">
<button class='btn' id='d' onclick="window.location.href='table.php'">
Reserve a table
</button>
</td>
</tr>
<tr>
<td id='prev' name='prev' onmouseover="f1('prev','e');" onmouseout="f2('prev','e');">
<button class='btn' id='e' onclick="window.location.href='prev.php'">
Previous Orders
</button>
</td>
</tr>
<tr>
<td id='fb' name='fb' onmouseover="f1('fb','f');" onmouseout="f2('fb','f');">
<button class='btn' id='f' onclick="window.location.href='feedback.php'">
Feedback
</button>
</td>
</tr>
<tr>
<td id='contact' name='contact' onmouseover="f1('contact','g');" onmouseout="f2('contact','g');">
<button class='btn' id='g' onclick="window.location.href='contact.php'">
Contact Us
</button>
</td>
</tr>
</table>

</body>
</html>