<?php

			$course_name=$_GET['course_name'];


       		/* $con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'uniquedeveloper');  */
  $con=mysqli_connect('sql6.freesqldatabase.com','sql6435193','F3REjmVvVA');


			mysqli_select_db($con,'sql6435193');

       		$id=$_GET['course_id'];
       		$q="DELETE from courses where id='$id'";
			$result=mysqli_query($con,$q);
			if ($result) {
				header("location:admin_edit_courses.php?course_name=$course_name");
			}
			

     ?>
