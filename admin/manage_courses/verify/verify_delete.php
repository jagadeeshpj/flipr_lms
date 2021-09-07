<?php 


	$course_name=$_GET['course_name'];


       		   $con=mysqli_connect('sql6.freesqldatabase.com','sql6435193','F3REjmVvVA');


			mysqli_select_db($con,'sql6435193');
       		$id=$_GET['course_id'];
       		$q="DELETE from courses where id='$id'";
			$result=mysqli_query($con,$q);
			if ($result) {
				header("location:../edit_topics.php?course_name=$course_name");
			}








 ?>
