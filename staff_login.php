<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	<link rel = "stylesheet" href = "css/styles.css"/>
</head>
<body>
<?php 
require('database/db_cn.php');
session_start();
if (isset($_POST['login'])){
$staff_Id = $_POST['staff_Id'];
$password = $_POST['password'];

//CHECKING IF USER IS EXISING IN THE DATABASE
$query = "SELECT * FROM `staff_reg` WHERE staff_Id= '$staff_Id' and  password= '".md5($password)."'";

$result = mysql_query($query)  or die(mysql_error());
$rows = mysql_num_rows($result);

if ($rows==1){
	$_SESSION ['staff_Id'] = $staff_Id;
	//echo "<script>alert('WELCOME TO YOUR HOME PAGE')</script>";
header("Location: staff_request.php");
}
else{
	echo "<script>alert('wrong password or staff Id')</script>";
	//echo "<script> alert('incorrect password or username') </script>";
}
}
 ?>
 <a class="home" href="index.php">HOME</a>
 <h2 class="staff_header">STAFF LOGIN PORTAL</h2>
<form class="login_form" name="login" method="post">
	<fieldset>
		<legend class="login_head"> Login </legend></p> 
		<div class="input_size">
		<input type="text" name="staff_Id" placeholder="Sfaff Id" required></p>
		<input type="password" name="password" placeholder="Password" required></p>
		<input class="login_btn" type="submit" name="login" value="Login">
		</div>

	</fieldset>
</form>
</body>

</html>