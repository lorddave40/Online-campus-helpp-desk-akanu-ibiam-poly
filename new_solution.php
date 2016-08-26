<?php
require_once('admin_logout.php');
  ?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href="css/mini.css">
	<title>New Solution::::::</title>
	<div class="admin_head"> <br> ADMIN SECTION</div>
	<div class="admin_sign_out"> <a  href="admin_destroy.php">Sign out</a> </div>
</head>
<body bgcolor ="#ccc">
<?php
require('database/db_cn.php');

if (isset($_POST['add'])){
	$tittle = $_POST['tittle'];
	$description = $_POST['description'];

$query = mysql_query("INSERT INTO faq (tittle, description) VALUES ('$tittle', '$description')");
	if (! $query){
		echo "<script> alert('error uploading solutiom') </script>";
	}
	else
	echo "<script> alert('uploading solution is succefull') </script>";	
}

?>

<div class="sol_form">
<h2>SOLVED ISSUES</h2>
<form method="POST">
	<input class="add_tittle" type="text" name="tittle" placeholder="Enter your Tittle" required> <p>
	
	<textarea name="description" cols="100" rows="20" placeholder="Full Details" required></textarea></p>

<input class="add_btn" type="submit" name="add" value="Add">
</div>
</form>
</body>
</html>