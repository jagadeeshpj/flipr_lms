
<?php
	

	   $con=mysqli_connect('remotemysql.com','n8gxap7PGT','hIeFLjY7Qe');


			mysqli_select_db($con,'n8gxap7PGT');
       $topicname=$_POST['topic_name'];
	 	$coursename=$_POST['coursename'];
	 	$description=$_POST['editor'];
	 	// echo $topicname;
	 	// echo $coursename;
	 	// echo $description;

	 	$qy="INSERT INTO `courses`( `topic_name`, `description`, `course_name`) VALUES ('$topicname','$description','$coursename')";


 	mysqli_query($con,$qy);
 	// echo "inserted";
 	header('location:admin_edit_courses.php?course_name='.$coursename);
?>
