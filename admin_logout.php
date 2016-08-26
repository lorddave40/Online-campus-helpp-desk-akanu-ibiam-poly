<?php 
session_start();
	if(! $_SESSION['id']){
header("Location: admin_login.php");
}

 ?>