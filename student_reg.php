
 <?php 
session_start();

// if (isset($_SESSION ['staff_Id'])){
	// header("Location : index.php");


//SETTING ERROR FLAGS AS FALSE

 $error = false;

// CHECKING IF FORM IS SUBMITED.......
	if (isset($_POST['submit'])){
	include_once ('database/db_cn.php');
		$reg_numb = $_POST['reg_numb'];
        $surName = $_POST['surName'];
		$firstName = $_POST['firstName'];
        $otherNames = $_POST['otherNames'];
        $email = $_POST['email'];
        $re_email = $_POST['re_email'];
        $password = $_POST['password'];
        $password = md5($password);
        //$password = sha1($password);

        $fetch = mysql_query("SELECT * FROM student_reg WHERE email='$email' || reg_numb ='$reg_numb'");
        if (mysql_num_rows($fetch)) {
        	echo "<script>alert('Student registration or eMail Address already used.')</script>";
        }
        else{
        if ($email != $re_email) {
        	echo "<script>alert('Email address does not match')</script>";
        }else{
        //$regDate = $_POST['regDate'];
       //$trn_date = date("Y-m-d H:i:s");

        
         //ERROR MESSAGE FOR PASSWORD
        // if (strlen($password < 6)) {
         	
         	//echo "<script> alert ('password must not be less than six(6) charaters') </script>";
        //}
        // else{

        //   IF THERE IS NO ERROR THEN DO THESE

       // if (!$error) {
       	$query = mysql_query("INSERT INTO student_reg(reg_numb, surName, firstName, otherNames, email, re_email, password)VALUES('$reg_numb','$surName','$firstName','$otherNames','$email','$re_email','$password')");
	       	if (!$query) {
	       		echo "<script>alert('Error in registration. Please try again!')</script>";
	       		// $sucess_msg = "registration was successful !!
	       		// <a href = 'index.php' > click here to login </a>";
	       	}else{
	       		echo "<script>alert('Sudent registeration was successful!')</script>";
	       		echo"<script>window.open('student_login.php','_self')</script>";
	       		// $error_msg = "ERROR has occured while registring please try again later";
	       	}
	       }
	   }
   }

?>

<!DOCTYPE html>
<html>
<head>
<a class="home" href="index.php">HOME</a> </p>
	<title>Student Registration Page</title>
	           
</head>
<body>
<link rel = "stylesheet" href = "css/styles.css"/>
<form method="post" action="#">
<fieldset id="staff_form">
	
		<legend class="reg_head">STUDENT REGISTRATION</legend>
		
		REISTRATION NUMBER <br>
<input type="text" name="reg_numb" placeholder="Enter Your Reg Number" required></p>
		SURNAME <br>
<input type="text" name="surName" placeholder="Enter Surname" required> </p>
		FIRST NAME <br>
<input type="text" name="firstName" placeholder="Enter First Name" required></p>
		OTHER NAMES <br>
<input type="text" name="otherNames" placeholder="Enter Other Names"></p>

EMAIL <br>
<input type="email" name="email" placeholder="Enter a Valid Email" required></P>
COMFIRM EMAIL <br>
<input type="email" name="re_email" placeholder="Re-Enter Email" required></P>


NEW USER PASSWORD <br>
<input type="password" name="password" placeholder="Enter new PassWord" required> </p>



<input class="reg_btn" type="submit" name="submit" value="SIGN UP">


<!--	date <br>
<input type="text" name="reg_Date" placeholder="Enter Reg"> </p> -->
	
	
</fieldset>
</form>
</body>
<footer>
</footer>
</html>
