
<?php 
session_start();
if (!$_SESSION['reg_numb']) {
	header("Location: student_login.php");
}
 ?>