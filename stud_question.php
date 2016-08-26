<?php 
include('include/simple_head.php');
 ?>
<html>
<link rel = "stylesheet" href = "css/mini.css">
<title>Question list</title>

</p>
</br>
<br>
<body>
<div class="display_margin">
<form method="POST">
<strong class="hd">Place an Issue to be Solve Within a Seconds </strong>
<input class="search_all" type="search" name="search" placeholder="make a Request">
<input class="s_btn" type="submit" name="submit" value="Search" >
<br>
</form>
<hr>	

<?php
include('database/db_cn.php');
if (isset($_POST['submit'])){
	$search = $_POST['search'];

	$query = mysql_query("SELECT * FROM faq WHERE tittle LIKE '%{$search}%' || description LIKE '%{$search}%'");
		if (mysql_num_rows($query) > 0){
			echo "<div class = 'f_result'> FILTERED RESULT..... </div>". "<br>" ;
			while ($row = mysql_fetch_array($query)) {

				echo "<div class = 'sa'>". $row ['tittle']."<br>". "</div>";
				echo $row ['description']. "<p>";
			}

		}
		else{
			echo "<div class = 'f_result'> FILTERED RESULT..... </div>". "<br>" ;
			echo "record not found in database please use the request section";
		}
}

 ?>
 </div>
 </body>
</html>
