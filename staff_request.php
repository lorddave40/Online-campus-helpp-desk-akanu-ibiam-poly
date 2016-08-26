<?php 
session_start();
if (!$_SESSION['staff_Id']) {
	header("Location: staff_login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>REQUEST PORTAL</title>
	
	<img class="poly_logo" src="img/poly_logo.png"> <img class="head_logo" src="img/help.jpg">
	
	<div id="naviMenu"> <!--wrapper opening-->
	<ul>
		<li><a href="index.php"> HOME </a> </li>
	</ul>
	<ul>
		<li> <a href="# it will take you to login page if u are nt loged in"> FAQs </a> </li>
	</ul>
	<ul>
		<li><a href="aboutUs.php"> About Us </a> </li>
	</ul>
	</div>

	<div class="noti">
		<select name="notifications">
		<option value="notification"> Notifications</option>
		<option> <a href="#">problem with id number 253 has been resolved</a></option>
		</select>
		</div>
		<div class="request_tool">
	<ul>
	<li><a href="logout.php"> Logout </a></li>
</ul>
	</div>
</head>
<body>
<p></p>
</br>
Tittle <br>
<input type="text" name="tittle">
<fieldset>
<legend>Your Questions</legend>
<textarea> </textarea>
</fieldset>
</body>
</html>