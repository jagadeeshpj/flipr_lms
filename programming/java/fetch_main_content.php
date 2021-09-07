<?php
session_start();

	 $con=mysqli_connect('sql6.freesqldatabase.com','sql6435193','F3REjmVvVA');


			mysqli_select_db($con,'sql6435193');
		$id=$_POST['txt1'];
		echo "hello JAGADEESH P";
		$q="select * from courses where id=$id";
		$result=mysqli_query($con,$q);
		$res=mysqli_fetch_array($result); 

	?>
      <div class="card col-md-6">
           <?php $_SESSION['message']=$res['description'];
           	
           //echo $res['description'];
            header("location:java_programming.php?course_name=".$res['course_name']); ?>


      </div>

	
	<?php ?>
