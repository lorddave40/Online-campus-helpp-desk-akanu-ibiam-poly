<?php
session_start();
session_destroy(); // Destroying All Sessions
header("Location: staff_login.php"); // Redirecting To Home Page
?>