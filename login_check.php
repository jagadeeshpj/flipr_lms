 <?php
session_start();
$con=mysqli_connect('remotemysql.com','n8gxap7PGT','hIeFLjY7Qe','n8gxap7PGT');

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$user_id=mysqli_real_escape_string($con,$_POST['user_id']);
$image=mysqli_real_escape_string($con,$_POST['image']);

$_SESSION['USER_ID']=$user_id;
        

$res=mysqli_query($con,"select * from userss where user_id='$user_id'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        $_SESSION['NAME']=$row['name'];
        
if($check>0){

}else{
        mysqli_query($con,"insert into userss(name,email,image,user_id) values('$name','$email','$image','$user_id')");
        $_SESSION['NAME']=$name;
}

echo header('location:index.php');


?>


