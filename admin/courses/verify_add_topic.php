
<?php
	

	    $con=mysqli_connect('sql6.freesqldatabase.com','sql6435193','F3REjmVvVA');


			mysqli_select_db($con,'sql6435193');
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
