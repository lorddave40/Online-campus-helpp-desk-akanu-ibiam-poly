<?php 
session_start();
if (!$_SESSION['staff_id']) {
	header("Location: staff_login.php");
}
 ?>