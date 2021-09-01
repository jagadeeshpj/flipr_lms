<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">



@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #EEECEB;
}
footer{
  position: relative;
  background: #000;
  width: 100%;
  bottom: 0;
  left: 0;
}
footer::before{
  content: '';
  position: absolute;
  left: 0;
  top: 100px;
  height: 1px;
  width: 100%;
  background: #000;
}
footer .content{
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}
footer .content .top{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}
.content .top .logo-details{
  color: #fff;
  font-size: 30px;
}
.content .top .media-icons{
  display: flex;
}
.content .top .media-icons a{
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1){
  background: #4267B2;
}
.top .media-icons a:nth-child(1):hover{
  color: #4267B2;
  background: #fff;
}
.top .media-icons a:nth-child(2){
  background: #E1306C;
}
.top .media-icons a:nth-child(2):hover{
  color: #E1306C;
  background: #fff;
}
.top .media-icons a:nth-child(3){
  background: #1DA1F2;
}
.top .media-icons a:nth-child(3):hover{
  color: #1DA1F2;
  background: #fff;
}
.top .media-icons a:nth-child(4){
  background: #0077B5;
}
.top .media-icons a:nth-child(4):hover{
  color: #0077B5;
  background: #fff;
}
.top .media-icons a:nth-child(5){
  background: #FF0000;
}
.top .media-icons a:nth-child(5):hover{
  color: #FF0000;
  background: #fff;
}
footer .content .link-boxes{
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer .content .link-boxes .box{
  width: calc(100% / 5 - 10px);
}
.content .link-boxes .box .link_name{
  color: #fff;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}
.link-boxes .box .link_name::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #fff;
}
.content .link-boxes .box li{
  margin: 6px 0;
  list-style: none;
}
.content .link-boxes .box li a{
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease
}
.content .link-boxes .box li a:hover{
  opacity: 1;
  text-decoration: underline;
}
.content .link-boxes .input-box{
  margin-right: 55px;
}
.link-boxes .input-box input{
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #AFAFB6;
  background: #140B5C;
  border-radius: 4px;
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}
.link-boxes .input-box input::placeholder{
  color: #AFAFB6;
  font-size: 16px;
}
.link-boxes .input-box input[type="button"]{
  background: #fff;
  color: #140B5C;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  transition: all 0.4s ease;
}
.input-box input[type="button"]:hover{
  opacity: 1;
}
footer .bottom-details{
  width: 100%;
background: #2c303a;
}
footer .bottom-details .bottom_text{
  max-width: 1250px;
  margin: auto;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
}
.bottom-details .bottom_text span,
.bottom-details .bottom_text a{
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}
.bottom-details .bottom_text a:hover{
  opacity: 1;
  text-decoration: underline;
}
.bottom-details .bottom_text a{
  margin-right: 10px;
}
@media (max-width: 900px) {
  footer .content .link-boxes{
    flex-wrap: wrap;
  }
  footer .content .link-boxes .input-box{
    width: 40%;
    margin-top: 10px;
  }
}
@media (max-width: 700px){
  footer{
    position: relative;
  }
  .content .top .logo-details{
    font-size: 26px;
  }
  .content .top .media-icons a{
    height: 35px;
    width: 35px;
    font-size: 14px;
    line-height: 35px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 3 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 60%;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a{
    font-size: 12px;
  }
}
@media (max-width: 520px){
  footer::before{
    top: 145px;
  }
  footer .content .top{
    flex-direction: column;
  }
  .content .top .media-icons{
    margin-top: 16px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 2 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 100%;
  }
}


    </style>
</head>















<body>
  <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <span class="logo_name">Flipr LMS</span>
        </div>
        <div class="media-icons">
          <a href="https://www.facebook.com/jagadeesh.PJ.13/" target="__blank"><i class="fa fa-facebook"></i></a>

          <a href="https://www.instagram.com/jagadeesh2001/" target="__blank"><i class="fa fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/p-jagadeesh-22923b18b/" target="__blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://github.com/jagadeeshpj" target="__blank"><i class="fa fa-github"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Links</li>
          <li><a href="../index.php">Home</a></li>
          
          <li><a href="https://jagadeeshpj.herokuapp.com/" target="__blank">About Us</a></li>
          <li><a href="#">Get Started</a></li>

        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="..\..\programmingdemo.php">My Courses</a></li>
          <li><a href="..\..\video tutorials\java\display_video_courses.php">Video Tutorials</a></li>
          <li><a href="..\..\online_quize\quizhome.php">Exercise</a></li>
          

        </ul>
        <ul class="box">
          <li class="link_name">My Website</li>
          <li><a href="https://jagadeeshpj.herokuapp.com/" target="__blank">about me</a></li>
          

        </ul>
        <ul class="box">
          <li class="link_name">Contact</li>
          <li><a href="#">+91 9573712XXX</a></li>
          <li><a href="#" >jagadeeshpj2001@gmail.com</a></li>
          <li><a href="https://jagadeeshpj.herokuapp.com/" target="__blank">Website</a></li>

        </ul>

      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">Flipr LMS</a></span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>

        </span>
      </div>
    </div>
  </footer>
</body>
</html>
