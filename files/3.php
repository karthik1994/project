<?php
require 'connection.php';

?>

<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css'>
<title>project</title>
<script>
<!--


-->
</script>
</head>
<body>
<div id='top'>
<img id='pic1' src='z.jpg' width='80px' alt='pics'>
<br>
<h1>
Home Delivery
</h1>
<img id='pic2' src='z.jpg' width='80px'>
<br>
</div>
<br>

<form method='POST' action='authenticate.php'>
<fieldset id='login'>
<h2>Login</h2>
Username: 
&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='uname'>
<br><br>
Password: 
&nbsp;&nbsp;&nbsp;&nbsp;
<input type='password' name='pwd'>
<br><br><br>
<input type='submit' value='Login'>
<br>
</fieldset>
<span id='sup'>
New User?<br>
<a href='sup.php'>Sign up!</a>
</span>

</body>
</html>
