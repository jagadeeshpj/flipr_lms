<?php 

include 'conn.inc.php';
include "../../admin/includes/navbar.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
.card-body
{
	 border-style: solid !important;
	  border-width:1px !important;
	  border-color: #ccc;
}

.container
{
	margin-top: 1%;
}

.inner img
{
	transition: all 1.5s ease;  /* to rotate image smoothly*/
	
}
.inner:hover img
{
	transform:rotate(5deg);      /* to rotate the image 5 deg*/
	
}

.photo                          /* for title image*/
{
	 display: block;
	  width: 80%;
  height: 70%;
  margin-left: auto;
  margin-right: auto;
}


	</style>
</head>
<body>


	 <!-- title image start -->
	
	<img src="onlinetutorial.jpg" alt="online" class="photo" width="100" height="50">
	<br><br>
	<!-- title image ends -->


	<!-- video course card starts -->
	
	<div class="container-fluid">

		<div class="row">
			

<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {

		 	?> 
		 	<div class="col-md-4">
				<div class="card shadow" style="width: 22rem; height: 10rem;">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 20rem;"   src=<?php echo $row['image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body text-center shadow">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				   <!--  <p class="card-text"><?php echo $row['description']; ?></p> -->
				    <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary">watch videos</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>

	<!-- video course card ends -->
<!-- 
<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?> <button > <a ><?php  echo $row['course_name']; ?></a></button><?php 
		}

		

 ?> -->


<!-- footer section starts -->
<br>
<br>
<br>
<br>
<br>
<br>
	
	
	
<footer style="margin-top: 90px;">
	 <?php 
 include "../../admin/includes/footer.php";
  ?>
</footer>

<!-- footer section ends -->

</body>
</html>
