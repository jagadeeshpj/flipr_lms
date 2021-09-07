<?php 
	
	   
	 /*  $con=mysqli_connect('localhost','root');  */
 $con=mysqli_connect('sql6.freesqldatabase.com','sql6435193','F3REjmVvVA');

			
	   if (!$con) {
	   	die('connection failed'.mysqli_connect_error());
	   }

	/* mysqli_select_db($con,'uniquedeveloper'); */
mysqli_select_db($con,'sql6435193');
 ?>
