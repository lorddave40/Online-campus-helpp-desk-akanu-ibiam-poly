<?php 
session_start();
session_destroy(); // Destroying All Sessions
header("Location: admin_login.php"); // Redirecting To Login Page

 ?>