<?php 


	$course_name=$_GET['course_name'];


       		  $con=mysqli_connect('remotemysql.com','n8gxap7PGT','hIeFLjY7Qe');


			mysqli_select_db($con,'n8gxap7PGT');
       		$id=$_GET['course_id'];
       		$q="DELETE from courses where id='$id'";
			$result=mysqli_query($con,$q);
			if ($result) {
				header("location:../edit_topics.php?course_name=$course_name");
			}








 ?>
