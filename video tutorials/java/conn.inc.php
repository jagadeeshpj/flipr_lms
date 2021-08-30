<?php 
	
	   
	 /*  $con=mysqli_connect('localhost','root');  */
 $con=mysqli_connect('remotemysql.com','n8gxap7PGT','hIeFLjY7Qe');
			
	   if (!$con) {
	   	die('connection failed'.mysqli_connect_error());
	   }

	/* mysqli_select_db($con,'uniquedeveloper'); */
mysqli_select_db($con,'n8gxap7PGT');
 ?>
