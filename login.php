<?php
session_start();

if (isset($_POST['log'])){
if($_POST['user']==("admin")&$_POST['psw']==("admin")){
    
     header('location:admin.php');
    
}else{
    echo 'error';
}
}
?>

<!DOCTYPE html>
<html>
<title>Login</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>

@media only screen and (max-width: 601px) {.w3-top {position:static;}}

</style>
<body id="myPage">



<div class="w3-top">

<ul class="w3-navbar w3-card-2 w3-black w3-large">
  <li><a href="home.php"  title="Go To home" class="w3-teal" ><i class="fa fa-home w3-large"><img  src="logo/logo.png"  style="min-height:35px;max-height:45px;"></i>HOME</a></li>
  <li><a href="menu.php">Menu</a></li>
  <li><a href="reservation.php">Reservation</a></li>
  <li><a href="login.php">Admin login</a></li>
</ul>
</div>

<br>
<br>


<div class="w3-center w3-animate-opacity"><br>
      <img src="logo/logo.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
    </div>



    <div class="w3-container ">
      <div class="w3-section">
        <form action="login.php"  method="POST">
        <label><b>Username</b></label>
        <input  class="w3-input w3-border w3-margin-bottom"  type="text" placeholder="Enter UserName" name="user" required><br>

        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required><br>
        
        <input type="submit" class="w3-btn w3-btn-block w3-green w3-section" name="log" value="Login">
        </form> 
      </div>
    </div>
    
    






<footer class="w3-container w3-padding-32 w3-theme w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"><img  src="logo/facebook.png"  style="min-height:40px;max-height:40px;"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"><img  src="logo/twitter.png"  style="min-height:33px;max-height:33px;"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"><img  src="logo/google.png"  style="min-height:33px;max-height:33px;"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Linkedin" ><i  class="fa fa-linkedin"><img  src="logo/linked.png"  style="min-height:33px;max-height:33px;"></i></a>
  <p>&#169; Copyright</p>     

  <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>        
</footer>










<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.width = "300px";
    document.getElementsByClassName("w3-sidenav")[0].style.textAlign = "center";
    document.getElementsByClassName("w3-sidenav")[0].style.fontSize = "40px";
    document.getElementsByClassName("w3-sidenav")[0].style.paddingTop = "10%";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}

function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>

</body>
</html>