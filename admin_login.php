<html>
<head>
	<title> Admin Login</title>
	<link rel = "stylesheet" href = "css/styles.css"/>
</head>
<body>
<?php 
require('database/db_cn.php');
session_start();
if (isset($_POST['login'])){
$id = $_POST['id'];
$password = $_POST['password'];

//CHECKING IF USER IS EXISING IN THE DATABASE
$query = "SELECT * FROM `administrators` WHERE id= '$id' and  password= '$password'";

$result = mysql_query($query)  or die(mysql_error());
$rows = mysql_num_rows($result);

if ($rows==1){
	$_SESSION ['id'] = $id;
header("Location: admin_control_panel.php");
}
else{
	echo "<script>alert('admin does not exist or wrong information') </script>";
}
}
 ?>
<form class="login_form" name="login" method="post" action="admin_login.php">
 <h2 class="staff_header">ADMIN LOGIN </h2>
	<fieldset>
		<legend class="login_head"> Login </legend></p> 
		<input type="text" name="id" placeholder="Admin Id" required></p>
		<input type="password" name="password" placeholder="Password" required></p>
		<input class="login_btn" type="submit" name="login" value="Login">

	</fieldset>
</form>
</body>

</html>