
 <?php 
session_start();

// if (isset($_SESSION ['staff_Id'])){
	// header("Location : index.php");


//SETTING ERROR FLAGS AS FALSE

 $error = false;

// CHECKING IF FORM IS SUBMITED.......
	if (isset($_POST['submit'])){
	include_once ('database/db_cn.php');
		$staff_Id = $_POST['staff_Id'];
        $surName = $_POST['surName'];
		$firstName = $_POST['firstName'];
        $otherNames = $_POST['otherNames'];
        $email = $_POST['email'];
        $re_email = $_POST['re_email'];
        $password = $_POST['password'];
        $password = md5($password);
        //$password = sha1($password);

        $fetch = mysql_query("SELECT * FROM staff_reg WHERE email='$email' OR staff_Id='$staff_Id'");
        if (mysql_num_rows($fetch)) {
        	echo "<script>alert('Staff Id or eMail Address already used.')</script>";
        }else{
        if ($email != $re_email) {
        	echo "<script>alert('Email address does not match')</script>";
        }else{
        //$regDate = $_POST['regDate'];
       //$trn_date = date("Y-m-d H:i:s");

        // NAME CAN ONLY CONTAIN ALPHA CHARATERS AND SPACES 

        if (!preg_match("/^[a-zA-Z ]+$/", $surName)){
       	$error = true;

        $surName_error = "Names Must only contain alpahaberts and spaces";
         }

        // if (!preg_match("/^[a-zA-Z ]+$/", $firstName)){
        // 	$error = true;

        // 	$firstName_error = "Names Must only contain alpahaberts and spaces";
        // }

        // if (!preg_match("/^[a-zA-Z ]+$/", $otherNames)){
        // 	$error = true;

        // 	$otherNames_error = "Names Must only contain alpahaberts and spaces";
        // }

        // //ERROR MESSAGE FOR EMAIL
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        // 	$error = true;
        // 	$email_error = "please Enter a valid Email ID";
        // }

        //  if (!filter_var($re_email, FILTER_VALIDATE_EMAIL)){ 
        // 	$error = true;
        // 	$email_error = "please Enter a valid Email ID";
        // }
        // if ($email != $re_email){
        // 	$error = true;
        // 	$email_error = "email does not match";
        // }

         //ERROR MESSAGE FOR PASSWORD
        // if (strlen($password < 6)) {
        //	$error = true;
        // 	$password_error = "password must not be less than six(6) charaters";
        // }

        //   IF THERE IS NO ERROR THEN DO THESE

       // if (!$error) {
       	$query = mysql_query("INSERT INTO staff_reg(staff_Id, surName, firstName, otherNames, email, re_email, password)VALUES('$staff_Id','$surName','$firstName','$otherNames','$email','$re_email','$password')");
	       	if (!$query) {
	       		echo "<script>alert('Error in registration. Please try again!')</script>";
	       		// $sucess_msg = "registration was successful !!
	       		// <a href = 'index.php' > click here to login </a>";
	       	}else{
                echo "<script>alert('registration was successful  YOU will be redirected to a login page') </script>";
	       		  echo"<script>window.open('staff_login.php','_self')</script>";
               // header("location:login.php");
	       		// $error_msg = "ERROR has occured while registring please try again later";
	       	}
	       }
	   }
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Registration Page</title>
	<link rel = "stylesheet" href = "css/styles.css"/>
    <a class="home" href="index.php">HOME</a> </p>
</head>
<body>
<form  role = "form" method="post" action="staff_reg.php" name="staff_reg">
<fieldset id="staff_form">
	
		<legend class = "reg_head">STAFF REGISTRATION</legend>
		
		ENTER YOUR ID <br>
<input type="text" name="staff_Id" placeholder="Enter Your Unique Staff Id" required></p>
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
