<!DOCTYPE html>
<html>
<head>
	<title> Student Login</title>
	<link rel = "stylesheet" href = "css/styles.css"/>
</head>
<body>
<?php 
require('database/db_cn.php');
session_start();
if (isset($_POST['login'])){
$reg_numb = $_POST['reg_numb'];
$password = $_POST['password'];

//CHECKING IF USER IS EXISING IN THE DATABASE
$query = "SELECT * FROM `student_reg` WHERE reg_numb= '$reg_numb' and  password= '".md5($password)."'";

$result = mysql_query($query)  or die(mysql_error());
$rows = mysql_num_rows($result);


if ($rows==1){
	$_SESSION ['reg_numb'] = $reg_numb;
header("Location: stud_question.php");
}
else{
	echo "<script>alert('wrong password or username') </script>";
}
}
 ?>
 <a class="home" href="index.php">HOME</a> </p>
 <h2 class="staff_header">STUDENT LOGIN PORTAL</h2>
<form class="login_form" name="login" method="post" action="student_login.php">
	<fieldset>
		<legend class="login_head"> Login </legend></p> 
		<input type="text" name="reg_numb" placeholder="Registeration Number" required></p>
		<input type="password" name="password" placeholder="Password" required></p>

		<input class="login_btn" type="submit" name="login" value="Login">
		
	</fieldset>
</form>
</body>


</html>