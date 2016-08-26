<?php
session_start();
session_destroy(); // Destroying All Sessions
header("Location: student_login.php"); // Redirecting To Login Page
?>