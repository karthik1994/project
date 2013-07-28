<html>
<head>
<title>View Profile</title>
<link rel='stylesheet' type='text/css' href='style.css'>
<style>
#b {border:4px outset black; background-color:#888888;}

</style>
<script>
<!--
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
<body>
<div id='top' name='top'>
<br>
<h1 name='p'>WELCOME</h1>
</br>
</div>
<br><br>
<table id='menu' outline='none' name='menu'>
<tr>
<td id='home' name='home' onmouseover="f1('home','a');" onmouseout="f2('home','a');">
<button class='btn' id='a' onclick="window.location.href='home.php'">
Home
</button>
</td>
</tr>
<tr>
<td id='profile' name='profile' onmouseover="f1('profile','b');" onmouseout="f2('profile','b');">
<button class='btn' id='b'>
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

<div id='center'>
<div id='pro_pic'>
<img src='85.jpg' name='pic' id='pic'>
</div>
<br>
<table id='bio' name='bio'>
<tr>
<td class='desc'>
First Name :
</td>
<td>
</td>
</tr>
<tr>
<td class='desc'>
Last Name :
</td>
<td>
</td>
</tr>
<tr>
<td class='desc'>
Roll No. :
</td>
<td>
</td>
</tr>
<tr>
<td class='desc'>
Department :
</td>
<td>
</td>
</tr>
<tr>
<td class='desc'>
Address :
</td>
<td>
</td>
</tr>
<tr>
<td class='desc'>
Phone No. :
</td>
<td>
</td>
</tr>
</table>
</div>

</body>
</html>